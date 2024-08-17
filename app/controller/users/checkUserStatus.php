<?php declare(strict_types=1);
    header('Content-Type: application/json');
    include 'database_connection.php'; // Include la connessione al database

    $iduser = $_POST['iduser'] ?? null;

    $response = ['status' => false, 'message' => 'Utente non trovato'];

    if ($iduser) {
        $stmt = $pdo->prepare("SELECT active FROM users WHERE id = ?");
        $stmt->execute([$iduser]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && $result['active']) {
            $response = ['status' => true, 'message' => 'Utente attivo'];
        } else {
            $response = ['status' => false, 'message' => 'Utente non attivo'];
        }
    }

    echo json_encode($response);
