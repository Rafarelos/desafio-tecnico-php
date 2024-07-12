<?php

require_once '../model/users_model.php';
require_once './usersController.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $controller = new usersController();
    
    $delete_user = $controller->delUsers($_GET['id']);
    
    if ($delete_user) {
        header("Location: http://localhost:7070/index.php"); exit(); 
    }
}