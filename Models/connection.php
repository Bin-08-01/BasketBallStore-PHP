<?php

class connection
{
    var $conn;

    function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'basketball_store';

        $this->conn = new mysqli($servername, $username, $password, $db_name);
        $this->conn->set_charset('utf8');

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}