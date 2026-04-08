<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $user;

    public function __construct($db) {
        $this->user = new User($db);
    }

    public function index() {
        return $this->user->getAll();
    }

    public function store($data) {
        $id = $this->user->create($data['name'], $data['email']);
        return [
            "id" => $id,
            "name" => $data['name'],
            "email" => $data['email']
        ];
    }

    public function update($data) {
        $this->user->update($data['id'], $data['name'], $data['email']);
        return $data;
    }

    public function delete($id) {
        return $this->user->delete($id);
    }
}