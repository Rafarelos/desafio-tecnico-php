<?php
require_once '../model/users_model.php';
require_once './usersController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $controller = new usersController();
    
    $create_user = $controller->update();
    
    if ($create_user) {
        header("Location: http://localhost:7070/index.php"); exit(); 
    }
}