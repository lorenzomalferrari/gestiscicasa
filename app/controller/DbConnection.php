<?php

namespace App\Database;

use PDO;
use PDOException;

class DbConnection {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $charset;

    private $connection;

    public function __construct(string $host, string $dbname, string $username, string $password, string $charset = 'utf8') {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->charset = $charset;

        $this->connect();
    }

    private function connect(): void {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Gestione dell'errore di connessione al database
            // Log degli errori, ecc.
            exit("Errore di connessione al database: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->connection;
    }
}

?>
