<?php declare(strict_types=1);

    // Definizione dell'array degli algoritmi di hashing
    define('HASH_ALGORITHMS', [
        'md5' => [
            'value' => 'md5',
            'description' => 'MD5 Hashing Algorithm (128-bit)'
        ],
        'sha1' => [
            'value' => 'sha1',
            'description' => 'SHA-1 Hashing Algorithm (160-bit)'
        ],
        'sha224' => [
            'value' => 'sha224',
            'description' => 'SHA-224 Hashing Algorithm (224-bit)'
        ],
        'sha256' => [
            'value' => 'sha256',
            'description' => 'SHA-256 Hashing Algorithm (256-bit)'
        ],
        'sha384' => [
            'value' => 'sha384',
            'description' => 'SHA-384 Hashing Algorithm (384-bit)'
        ],
        'sha512' => [
            'value' => 'sha512',
            'description' => 'SHA-512 Hashing Algorithm (512-bit)'
        ],
        'ripemd160' => [
            'value' => 'ripemd160',
            'description' => 'RIPEMD-160 Hashing Algorithm (160-bit)'
        ],
        'whirlpool' => [
            'value' => 'whirlpool',
            'description' => 'Whirlpool Hashing Algorithm (512-bit)'
        ],
        'tiger128,3' => [
            'value' => 'tiger128,3',
            'description' => 'Tiger Hashing Algorithm (128-bit, 3 rounds)'
        ],
        'tiger160,3' => [
            'value' => 'tiger160,3',
            'description' => 'Tiger Hashing Algorithm (160-bit, 3 rounds)'
        ],
        'tiger192,3' => [
            'value' => 'tiger192,3',
            'description' => 'Tiger Hashing Algorithm (192-bit, 3 rounds)'
        ]
    ]);
