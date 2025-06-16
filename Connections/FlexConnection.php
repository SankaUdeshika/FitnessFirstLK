<?php

class FlexDatabase
{
    public static $connection;

    public static function setUpConnections()
    {
        if (!isset(FlexDatabase::$connection)) {
            FlexDatabase::$connection = new mysqli("localhost", "root", "12345678", "flex_db", "3306");
        }
    }

    public static function iud($q)
    {
        FlexDatabase::setUpConnections();
        FlexDatabase::$connection->query($q);
    }

    public static function search($q)
    {
        FlexDatabase::setUpConnections();
        $resultSet = FlexDatabase::$connection->query($q);
        return $resultSet;
    }

    public static function escape($Text)
    {
        FlexDatabase::setUpConnections();
        $TextResults = FlexDatabase::$connection->real_escape_string($Text);
        return $TextResults;
    }
}
