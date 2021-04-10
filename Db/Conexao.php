<?php

class Conexao{
    public static $instance;

    public static function getConn() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost; dbname=dev_vagas;', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}