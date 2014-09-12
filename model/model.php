<?php
require_once("database.php");

class Model
{
/*    function __construct($title, $description, $author, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
		$this->image = $image;
    }*/
	
	static function readMainPage(){
		$result = Database::query("SELECT * FROM main");
        $articles = array();

        while ($obj = $result->fetch_object()) {
            $articles[$obj->id] = $obj;
        }
        return $articles;
	}
	
	static function readPersonInfo(){
		$result = Database::query("SELECT * FROM person");
        $person = array();

        while ($obj = $result->fetch_object()) {
            $person[$obj->id] = $obj;
        }
        return $person;
	}
	
	static function readWork(){
		$result = Database::query("SELECT * FROM work");
        $work = array();

        while ($obj = $result->fetch_object()) {
            $work[$obj->id] = $obj;
        }
        return $work;
	}
	
	static function readComment(){
		$result = Database::query("SELECT * FROM comment");
        $comment = array();

        while ($obj = $result->fetch_object()) {
            $comment[$obj->id] = $obj;
        }
        return $comment;
	}
}?>