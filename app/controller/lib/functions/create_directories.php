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

    $filesToCreate = [
        "{$basePath}/{$config['nome']['error']}/error_log.{$extensions}",
        "{$basePath}/{$config['nome']['error']}/database_log.{$extensions}",
        "{$basePath}/{$config['nome']['error']}/ip_log.{$extensions}",
        "{$basePath}/{$config['nome']['error']}/api_log.{$extensions}",
        "{$basePath}/{$config['nome']['error']}/server_log.{$extensions}",
        "{$basePath}/{$config['nome']['user']['subpath']}/{$config['nome']['user']['nome']}.{$extensions}",
    ];

    foreach ($directories as $dir) {
        if (!file_exists($dir) || !is_dir($dir)) {
            if (!mkdir($dir, 0755, true)) {
                echo "Impossibile creare la cartella $dir\n";
                return false;
            }
            echo "Creata la cartella $dir\n";
        } else {
            echo "La cartella $dir esiste già\n";
        }
    }

    foreach ($filesToCreate as $file) {
        if (!file_exists($file)) {
            if (!touch($file)) {
                echo "Impossibile creare il file $file\n";
                return false;
            }
            echo "Creato il file $file\n";
        } else {
            echo "Il file $file esiste già\n";
        }
    }

    echo "Tutte le cartelle e i file sono stati controllati o creati correttamente.\n";
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
