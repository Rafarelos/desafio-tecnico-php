<?php

require_once '../connection.php';
class users_model
{

    public function __construct()
    {
        $connection = new Connection();
        $connection->connect();
    }
    public function add($data)
    {
        $connection = new Connection();
        $result = $connection->query("INSERT INTO users (name, email) VALUES('{$data['name']}', '{$data['email']}');");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $connection = new Connection();
        $result = $connection->query("DELETE FROM users WHERE id = {$id}");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $name, $email) {
        $connection = new Connection();
        $stmt = $connection->query("UPDATE users SET name='{$name}', email='{$email}' WHERE id={$id}");
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}