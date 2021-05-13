<?php

namespace app\models;

use PDO;

class Auth
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function auth($login, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE login=:login");
        $stmt->execute([
            'login' => $login,
        ]);
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        };
        return false;
    }

    public function register($login, $password)
    {
        if ($this->auth($login, $password)) {
            return -1;
        }

        $stmt = $this->pdo->prepare("INSERT INTO users (login,password) VALUES (:login,:password)");
        $stmt->execute([
            'login' => $login,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
        return $this->pdo->lastInsertId();
    }

    public function find($id){
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }
}
