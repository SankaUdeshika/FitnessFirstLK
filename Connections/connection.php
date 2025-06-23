<?php

class Database{
    public static $connection;

    public static function setUpConnections()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "12345678", "fitnessfirstlk_db", "3306");
        }
    }

    public static function iud($q)
    {
        Database::setUpConnections();
        Database::$connection->query($q);
    }

    public static function search($q)
    {
        Database::setUpConnections();
        $resultSet = Database::$connection->query($q);
        return $resultSet;
    }

    public static function escape($Text){
        Database::setUpConnections();
       $TextResults = Database::$connection->real_escape_string($Text);
        return $TextResults;
    }

}
