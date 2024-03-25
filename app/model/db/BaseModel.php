<?php

namespace App\Repositories;

use App\Database\DbConnection;
use App\Models\User;
use PDO;
use PDOException;

class UserRepository {
    protected $db;

    public function __construct(DbConnection $db) {
        $this->db = $db;
    }

    // Metodo per trovare un utente per ID
    public function findById(int $id): ?User {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->db->getConnection()->prepare($query);
        
        try {
            $stmt->execute(['id' => $id]);
            $user = $stmt->fetchObject(User::class);
            return $user ?: null; // Restituisci l'utente se trovato, altrimenti null
        } catch (PDOException $e) {
            // Gestione dell'errore
            // Log degli errori, ecc.
            return null;
        }
    }

    // Metodo per creare un nuovo utente
    public function create(User $user): bool {
        $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $this->db->getConnection()->prepare($query);

        try {
            return $stmt->execute(['name' => $user->getName(), 'email' => $user->getEmail()]);
        } catch (PDOException $e) {
            // Gestione dell'errore
            // Log degli errori, ecc.
            return false;
        }
    }

    // Metodo per aggiornare un utente esistente
    public function update(User $user): bool {
        $query = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $stmt = $this->db->getConnection()->prepare($query);

        try {
            return $stmt->execute([
                'id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail()
            ]);
        } catch (PDOException $e) {
            // Gestione dell'errore
            // Log degli errori, ecc.
            return false;
        }
    }

    // Metodo per eliminare un utente
    public function delete(int $id): bool {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->db->getConnection()->prepare($query);

        try {
            return $stmt->execute(['id' => $id]);
        } catch (PDOException $e) {
            // Gestione dell'errore
            // Log degli errori, ecc.
            return false;
        }
    }
}
?>