<?php

class Database
{
    static function query($query)
    {
        $mysqli = new mysqli("localhost", "presentation", "presentation", "presentation");

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