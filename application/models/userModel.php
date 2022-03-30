<?php

class userModel extends database
{

    public function myData()
    {
        // $fullName = $_POST['fullName'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        $id = 1;

        // if ($this->query("INSERT INTO users(fullName, email, password)
        // VALUES (?, ?, ?)", [$fullName, $email, $password])) {
        if ($this->query("SELECT * FROM users where id=$id")) {
            return $this->fetchall();
        } else return false;
    }
}
