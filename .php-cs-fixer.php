<?php
    $finder = PhpCsFixer\Finder::create()
        ->in(__DIR__)  // Analizza tutte le cartelle a partire dalla radice del progetto
        ->name('*.php')  // Cerca tutti i file con estensione .php
        ->exclude('public/vendor');  // Escludi la cartella vendor

    return (new PhpCsFixer\Config())
        ->setRules([
            '@PSR2' => true,  // Usa lo standard PSR-2 per la formattazione
            // Aggiungi altre regole di formattazione qui, se necessario
        ])
        ->setFinder($finder);
