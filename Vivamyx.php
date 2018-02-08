<?php

include 'MySQL/Database.php';

class Vivamyx {

    public $version = 1.0;

    function __construct() {

    }

    function getVersion() {
        return $this->version;
    }

    function getDatabase() {
        $DatabaseClass = new Database();
        return $DatabaseClass;
    }

    function test() {

    }

}