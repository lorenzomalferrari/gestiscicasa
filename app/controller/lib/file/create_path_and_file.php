<?php declare(strict_types=1);

    $basePath = CONFIG['log']['baseFolder'];
    $extensions = CONFIG['log']['extension'];

    $directories = [
        PathAndFilesLog::FOLDER_BASE,
        PathAndFilesLog::FOLDER_SUB_BASE,
        PathAndFilesLog::FOLDER_SUB_BASE_BACKUP,
        //creo cartella file e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_FILE,
        PathAndFilesLog::FOLDER_FILE_ERROR,
        PathAndFilesLog::FOLDER_FILE_LOG,
        //creo cartella error e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_ERROR,
        PathAndFilesLog::FOLDER_ERROR_ERROR,
        PathAndFilesLog::FOLDER_ERROR_LOG,
        //creo cartella database e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_DATABASE,
        PathAndFilesLog::FOLDER_DATABASE_ERROR,
        PathAndFilesLog::FOLDER_DATABASE_LOG,
        //creo cartella id e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_IP,
        PathAndFilesLog::FOLDER_IP_ERROR,
        PathAndFilesLog::FOLDER_IP_LOG,
        //creo cartella api e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_API,
        PathAndFilesLog::FOLDER_API_ERROR,
        PathAndFilesLog::FOLDER_API_LOG,
        //creo cartella performance e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_PERFORMANCE,
        PathAndFilesLog::FOLDER_PERFORMANCE_ERROR,
        PathAndFilesLog::FOLDER_PERFORMANCE_LOG,
        //creo cartella email e le due sotto cartelle errors e gen
        PathAndFilesLog::FOLDER_EMAIL,
        PathAndFilesLog::FOLDER_EMAIL_ERROR,
        PathAndFilesLog::FOLDER_EMAIL_LOG,
        //creo cartella user, al momento solo questa, post login faccio la sotto carte con id e poi le sotto cartelle error e log
        PathAndFilesLog::FOLDER_USER,
    ];

    $filesToCreate = [

        PathAndFilesLog::PATH_FILE_ERROR,
        PathAndFilesLog::PATH_FILE_LOG,

        PathAndFilesLog::PATH_ERROR_ERROR,
        PathAndFilesLog::PATH_ERROR_LOG,

        PathAndFilesLog::PATH_DATABASE_ERROR,
        PathAndFilesLog::PATH_DATABASE_LOG,

        PathAndFilesLog::PATH_IP_ERROR,
        PathAndFilesLog::PATH_IP_LOG,

        PathAndFilesLog::PATH_API_ERROR,
        PathAndFilesLog::PATH_API_LOG,

        PathAndFilesLog::PATH_PERFORMANCE_ERROR,
        PathAndFilesLog::PATH_PERFORMANCE_LOG,

        PathAndFilesLog::PATH_EMAIL_ERROR,
        PathAndFilesLog::PATH_EMAIL_LOG,

    ];

    FileManager::createDirectories($directories, $filesToCreate);
