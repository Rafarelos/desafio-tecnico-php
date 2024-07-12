<?php

require_once '../model/users_model.php';

$users_model = new users_model();

class usersController {
    public function addUser() {
        $model = new users_model();
        $data = array(
            'name'=> $_POST['nome'],
            'email'=> $_POST['email'],
        );
        return $model->add($data);
    }
    public function delUsers($id) {
        $model = new users_model();
        return $model->delete($id);
    }

    public function update() {
        $model = new users_model();
        
        return $model->update($_POST['id'], $_POST['nome'], $_POST['email']);
    }
}