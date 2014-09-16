<?php

class Database
{
    static function query($query)
    {
        $host = "localhost";
        $username = "presentation";
        $password = "presentation";
        $db_name = "presentation";

        $mysqli = new mysqli($host, $username, $password, $db_name);
        $mysqli->set_charset("utf8");

        if ($mysqli->connect_errno) {
            printf("Error connect database: %s\n", $mysqli->connect_error);
            die();
        }

        $tableQuery = $mysqli->query($query);

        $mysqli->close();

        return $tableQuery;
    }
}

?>