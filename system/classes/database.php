<?php

class database
{

    public $host     = HOST;
    public $user     = USER;
    public $database = DATABASE;
    public $password = PASSWORD;
    public $con;
    public $result;

    public function __construct()
    {
        $this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->database,
        $this->user, $this->password);
        $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $this->con;
        // return $this->con = new mysqli($this->host, $this->user, $this->password, $this->database);
    }

    public function query($qry, $params = [])
    {
        if (empty($params)) {
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();
        } else {
            $this->result = $this->con->prepare($qry);
            return $this->result->execute($params);
        }
    }

    public function rowCount()
    {
        return $this->result->rowCount();
    }

    public function fetchall()
    {
        return $this->result->fetchAll();
    }

    public function fetch()
    {
        return $this->result->fetch();
    }
}
