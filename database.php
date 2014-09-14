<?php

class Database
{
    static function query($query)
    {
        $mysqli = new mysqli("localhost", "visitka", "visitka", "presentation_site");

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