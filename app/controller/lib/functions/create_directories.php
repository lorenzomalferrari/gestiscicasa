<?php

function createDirectories(array $config)
{
    $basePath = $config['path'] ?? 'gc_logs/';
    $extensions = $config['extension'] ?? 'gm';
    $directories = [
        $basePath,
        "{$basePath}/{$config['nome']['file']}",
        "{$basePath}/{$config['nome']['error']}",
        "{$basePath}/{$config['nome']['database']}",
        "{$basePath}/{$config['nome']['id']}",
        "{$basePath}/{$config['nome']['api']}",
        "{$basePath}/{$config['nome']['performance']}",
        "{$basePath}/{$config['nome']['user']['subpath']}/{$config['nome']['user']['nome']}",
    ];

    foreach ($directories as $dir) {
        // Verifica se la cartella esiste già
        if (!file_exists($dir) || !is_dir($dir)) {
            // Crea la cartella se non esiste
            if (!mkdir($dir, 0755, true)) {
                echo "Impossibile creare la cartella $dir\n";
                return false;
            }
            echo "Creata la cartella $dir\n";
        } else {
            echo "La cartella $dir esiste già\n";
        }
    }

    echo "Tutte le cartelle sono state controllate o create correttamente.\n";
    return true;
}

// Esempio di utilizzo con il tuo array di configurazione
$config = [
    'path' => 'gc_logs/',
    'nome' => [
        'file' => 'logs',
        'error' => 'error/error_log',
        'database' => 'error/database_log',
        'id' => 'error/ip_log',
        'api' => 'error/api_log',
        'performance' => 'error/server_log',
        'user' => [
            'subpath' => 'error',
            'nome' => 'user_log',
        ],
    ],
    'extension' => 'gm',
];

createDirectories($config);
