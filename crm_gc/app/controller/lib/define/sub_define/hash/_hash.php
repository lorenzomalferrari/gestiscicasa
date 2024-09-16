<?php declare(strict_types=1);

    // Definizione dell'array degli algoritmi di hashing
    define('HASH_ALGORITHMS', [
        'md5' => [
            'value' => 'md5',
            'description' => 'MD5 Hashing Algorithm (128-bit)',
            'note' => 'Commonly used for checksums and data integrity, but considered weak for cryptographic security.'
        ],
        'sha1' => [
            'value' => 'sha1',
            'description' => 'SHA-1 Hashing Algorithm (160-bit)',
            'note' => 'Used for digital signatures and certificates, but vulnerable to collision attacks. Not recommended for secure hashing.'
        ],
        'sha224' => [
            'value' => 'sha224',
            'description' => 'SHA-224 Hashing Algorithm (224-bit)',
            'note' => 'Part of the SHA-2 family, offering a balance between security and performance, less common than SHA-256.'
        ],
        'sha256' => [
            'value' => 'sha256',
            'description' => 'SHA-256 Hashing Algorithm (256-bit)',
            'note' => 'Widely used and considered secure for most cryptographic purposes. Common in security certificates and signatures.'
        ],
        'sha384' => [
            'value' => 'sha384',
            'description' => 'SHA-384 Hashing Algorithm (384-bit)',
            'note' => 'Provides a higher security level than SHA-256, used in situations requiring enhanced security.'
        ],
        'sha512' => [
            'value' => 'sha512',
            'description' => 'SHA-512 Hashing Algorithm (512-bit)',
            'note' => 'Offers the highest security in the SHA-2 family, used for high-security applications.'
        ],
        'ripemd160' => [
            'value' => 'ripemd160',
            'description' => 'RIPEMD-160 Hashing Algorithm (160-bit)',
            'note' => 'Less commonly used, considered secure but not as widely supported or standardized as SHA-2.'
        ],
        'whirlpool' => [
            'value' => 'whirlpool',
            'description' => 'Whirlpool Hashing Algorithm (512-bit)',
            'note' => 'A cryptographic hash function with a high level of security, used in some cryptographic applications.'
        ],
        'tiger128,3' => [
            'value' => 'tiger128,3',
            'description' => 'Tiger Hashing Algorithm (128-bit, 3 rounds)',
            'note' => 'Designed for fast hashing with a focus on performance in software implementations.'
        ],
        'tiger160,3' => [
            'value' => 'tiger160,3',
            'description' => 'Tiger Hashing Algorithm (160-bit, 3 rounds)',
            'note' => 'A variant of Tiger, providing a higher level of security with a slightly larger output size.'
        ],
        'tiger192,3' => [
            'value' => 'tiger192,3',
            'description' => 'Tiger Hashing Algorithm (192-bit, 3 rounds)',
            'note' => 'The most secure variant of Tiger, used where high security is needed.'
        ]
    ]);
