<?php
// Файл: admin/config.php

class DatabaseConfig {
    private $host = 'localhost';
    private $db_name = 'u926755719_semenovposts';
    private $username = 'u926755719_semenov';
    private $password = '123456Semenov!';
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}

$page_title = 'Админка';