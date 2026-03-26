<?php
namespace App\Controller;
use App\Statics\DatabaseSingleton;

use PDO, PDOException;
use UnexpectedValueException;

class DatabaseController
{
    private $Conn;

    public function __construct()
    {
        DatabaseSingleton::$conn ?: DatabaseSingleton::makeCon();
        $this->Conn = DatabaseSingleton::$conn;
    }

    public function getFromTable(string $table, bool $all, bool $where, ?string $condition = null, ?array $columns = null): array
    {
        if ($all) {
            $sql = "SELECT * FROM $table";
        } else {
            $sql = "SELECT";

            if (count($columns) > 1) {
                foreach ($columns as $column) {
                    $sql .= " $column,";
                    print ($sql);
                }
            } else {
                $sql .= " $columns[0]";
            }

            $sql .= " FROM $table";
        }

        if ($where) {
            $sql .= " WHERE $condition";
        }

        $stmt = $this->Conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /** 
     * @param string $username the username enterd by the user
     * @param string $password the password enterd by the user
     * 
     * @return true|false if the enterd password matches hashed password in the database | if the password is wrong or when the username and/or password are wrong
     */
    public function login(string $username, string $password): bool
    {
        $sql = "SELECT password FROM users WHERE username = :username";

        $stmt = $this->Conn->prepare($sql);
        $stmt->execute(["username" => $username]);

        $res = $stmt->fetchAll();

        if (count($res) > 0) {
            return true;
        } else {
            return password_verify($password, $res[0]);
        }
    }

    public function registerUser(string $username, string $password, string $firstname, string $lastname, string $email){
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->Conn->prepare($sql);
        $res = $stmt->execute(["username" => $username, "password" => $hashedPass]);

        if ($res){
            $sql = "SELECT userID FROM users WHERE username = :username";

            $secstmt = $this->Conn->prepare($sql);
            $secstmt->execute(["username" => $username]);

            $userID = $secstmt->fetch();

            $sql = "INSERT INTO personal_info VALUES (:userID, :firstname, :lastname, :email)";
            $thstmt = $this->Conn->prepare($sql);
            
            $thstmt->execute(["userID" => $userID, "firstname" => $firstname, "lastname" => $lastname, "email" => $email]);
        } else {

        }
    }
}