<?php
namespace App\Models;

class UserInfo
{
    public string $userinfoid;
    public string $firstname;
    public string $latname;
    public string $email;
    public string $birthday;
    public string $phonenumber;
    public string $address;
    public string $zipcode;
    public string $city;


    public function __construct(int $userinfoid, string $username, string $firstname, string $lastname, string $email, int $role = 2) {
        $this->userinfoid = $userinfoid;    
        $this->firstname = $firstname;
        $this->firstname = $firstname;
        // $this->lastname = $lastname;
        // $this->email = $email;
        // $this->role = $role;
    }
}