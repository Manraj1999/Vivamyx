<?php

class Database {

    function connectToDatabase() {
        static $connection;

        if(!isset($connection)) {
           require '../Katana/config.php';

           $host = DB_HOST;
           $username = DB_USER;
           $password = DB_PASSWORD;
           $database = DB_DATABASE;

           $connection = mysqli_connect($host, $username, $password, $database);
        }

        if($connection == false) {
            echo 'An error occurred while connecting to the database.';
            echo 'Error: ' . mysqli_connect_error();
            echo 'Errno: ' . mysqli_connect_errno();
        }

        return $connection;
    }

    function getConnection() {
        return $this->connectToDatabase();
    }

    function disconnectFromDatabase() {
        $connection = $this->getConnection();

        if(isset($connection)) {
            die('Connection to the database has been disconnected.');
        } else {
            echo 'There was no connection to end.';
        }
    }

}