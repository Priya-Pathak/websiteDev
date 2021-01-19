<?php

class connectDB{
    private $localhost;
    private $my_user;
    private $my_password;
    private $my_db;

    function __construct($localhost, $my_user, $my_password, $my_db)
    {
        $this->localhost = $localhost;
        $this->my_user = $my_user;
        $this->my_password = $my_password;
        $this->my_db = $my_db;
        
        $mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        
        }
    }

}

?>