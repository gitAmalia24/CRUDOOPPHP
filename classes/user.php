<?php
include("classes/DB.php");

class User extends DB {

    public function getAll()
    {
        return $this->connect->query("SELECT * FROM users");
    }

    public function getUserbyId($id)
    {
        return $this->connect->query("SELECT * FROM users WHERE id = '$id'")->fetch_assoc();
    }


    public function create($data)
    {
        // $name = $data["name"];
        // $username = $data["username"];
        // $password = $data["password"];
    }
}

?>