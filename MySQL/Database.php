<?php

class Database {

    public $db_info = 'db_info.php';

    function setDatabaseInfo($databaseName, $username, $password, $siteURL, $port) {
        if(!file_exists($this->db_info)) {
            $handle = fopen($this->db_info, 'w') or die();
        } else {
            $handle = fopen($this->db_info, 'w') or die('Unable to open the file: ' . $this->db_info);
            fwrite($handle, 'Database: ' . $databaseName);
            fwrite($handle, 'Username: ' . $username);
            fwrite($handle, 'Password: ' . $password);
            fwrite($handle, 'Site URL: ' . $siteURL);
            fwrite($handle, 'Port: ' . $port);
            fclose($handle);
        }
    }

    function getDatabaseInfo() {
        if(!file_exists($this->db_info)) {
            die('File: ' . $this->db_info . ' - Does not exist');
        } else {
            $data = file($this->db_info);
            foreach($data as $line_num=>$line) {
                echo 'Line #' . $line_num . ': ' . $line;
            }

        }
    }

    // Ask for input every time this function is called
    function connectToDatabase() {

    }

    function getConnection() {
        return $this->connectToDatabase();
    }

}