<?php declare(strict_types=1);

    /**
     * Class TokenGenerator
     *
     * A utility class for generating secure tokens based on dynamic values and configuration settings.
     *
     * The generated token is created by concatenating dynamic values, applying a hashing algorithm,
     * and then extracting a specified number of random characters from the hash.
     *
     * Configuration options include the length of the token, the hashing algorithm to use,
     * and the length of the random part.
     */
    class TokenGenerator
    {
        /**
         * Generates a token based on dynamic values and configuration.
         *
         * @return string The generated token.
         * @throws Exception If there are issues with the parameters or configuration.
         */
        public static function generate(): string
        {
            //An array containing 'params' and 'config' for token generation.
            $data = UNIQ_TOKEN_v2;
            // Validate and extract parameters
            if (!isset($data['params']) || !isset($data['config'])) {
                throw new Exception('Missing parameters or configuration.');
            }

            $params = $data['params'];
            $config = $data['config'];

            if (!isset($config['length']) || !isset($config['algorithm'])) {
                throw new Exception('Configuration must include length and algorithm.');
            }

            $tokenLength = (int) $config['length'];
            $algorithm = $config['algorithm'];
            $randomPartLength = $config['randomPartLength'] ?? 16; // Default to 16 bytes if not specified

            // Split and concatenate values
            $splitValues = self::splitAndConcatenateValues($params, $config);

            // Generate the token
            $randomPart = bin2hex(random_bytes($randomPartLength));
            $hash = hash($algorithm, $splitValues . $randomPart);

            // Extract random characters from the hash
            $token = self::extractRandomCharacters($hash, $tokenLength);

            return $token;
        }

        /**
         * Splits values into parts and concatenates them randomly.
         *
         * @param array $values An array of values to be split and concatenated.
         * @param array $config Configuration array containing 'splitLength'.
         * @return string The concatenated string of split values.
         */
        private static function splitAndConcatenateValues(array $values, array $config): string
        {
            $splitLength = $config['splitLength'] ?? 1;
            $parts = [];

            foreach ($values as $value) {
                $length = strlen($value);
                for ($i = 0; $i < $length; $i += $splitLength) {
                    $parts[] = substr($value, $i, $splitLength);
                }
            }

            // Shuffle the parts array to concatenate them randomly
            shuffle($parts);

            return implode('', $parts);
        }

        /**
         * Extracts a specific number of random characters from the hash.
         *
         * @param string $hash The hash string to extract characters from.
         * @param int $length The number of characters to extract.
         * @return string The extracted characters as a string.
         */
        private static function extractRandomCharacters(string $hash, int $length): string
        {
            $hashLength = strlen($hash);

            // Adjust token length if it exceeds the hash length
            if ($length > $hashLength) {
                $length = $hashLength;
            }

            $characters = str_split($hash);
            $selectedChars = [];
            $indices = array_rand($characters, $length);

            foreach ((array) $indices as $index) {
                $selectedChars[] = $characters[$index];
            }

            return implode('', $selectedChars);
        }
    }
