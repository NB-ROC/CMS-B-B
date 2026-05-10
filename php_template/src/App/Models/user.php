<?php
namespace App\Models;

class User
{
    public string $username;
    public string $firstname;
    public string $lastname;
    public string $email;
    public int $role;


    public function __construct(string $username, string $firstname, string $lastname, string $email, int $role = 2) {
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->role = $role;
    }
}