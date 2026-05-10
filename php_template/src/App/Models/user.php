<?php
namespace App\Models;

class User
{
    public int $userid;
    public string $username;
    public int $userinfoid;
    public string $lastname;
    public string $email;
    public int $roleid;


    public function __construct(int $userid, string $username, int $userinfoid, string $lastname, string $email, int $role = 2) {
        $this->userid = $userid;    
        $this->username = $username;
        $this->userinfoid = $userinfoid;
        $this->roleid = $role;
    }
}