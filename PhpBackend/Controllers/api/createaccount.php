<?php
namespace PhpApp\Controllers\Api;
class CreateAccount extends BaseController {
private $username;
private $password;

public function __construct($data) {
    $this->username = $data['username'];
    $this->password = $data['password'];
    $this->confirmPassword = $data['confirmPassword'];
$user = new DatabaseConfig();

}

}


?>