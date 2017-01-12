<?php

  class User {

    public $id;
    public $username;
    public $email;
    public $password;

    public function __construct() {

    }

    public function register() {
      echo "Usuário registrado!";
    }

    public function login($username, $password) {
      $this->username = $username;
      $this->password = $password;
      $this->auto_user($username, $password);
    }

    public function auth_user() {
      echo $username . " foi autenticado";
    }

  }

$User = new User;

$User->login('diazzi','1234');
