<?php

class Database {

    private static $instance = NULL;

    public static function getInstance() {
        if(!self::$instance){
            $settings = include 'settings/main.php';
            self::$instance = new PDO('mysql:host=localhost;dbname=' . $settings['DB_name'], $settings['DB_user'], $settings['DB_password']);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

    private function __construct() {}
    private function __destruct(){}
    private function __clone() {}
    private function __wakeup() {}
}