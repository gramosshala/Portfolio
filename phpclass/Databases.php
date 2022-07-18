<?php

class Databases
{

    private $localhost;
    private $user;
    private $pass;
    private $emriDatabases;

    function __construct()
    {
        $this->localhost = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->emriDatabases = 'portfolio';
    }

    function getConnection()
    {

        $connection = new mysqli($this->localhost, $this->user, $this->pass, $this->emriDatabases);

        if ($connection->connect_errno) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }

}