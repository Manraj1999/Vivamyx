<?php

include 'MySQL/Database.php';
require 'Katana/config.php';

class Vivamyx {

    function __construct() {

    }

    function getVersion() {
        return API_VERSION;
    }

    function getDatabase() {
        $DatabaseClass = new Database();
        return $DatabaseClass;
    }



}