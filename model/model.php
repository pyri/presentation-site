<?php
require_once("database.php");

class Model
{
	
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
		$result = Database::query("SELECT max(id) as maxId FROM comment");		
		$maxId = array();
		
		while ($obj = $result->fetch_object()) {
            $maxId[$obj->id] = $obj;
        }
		
		foreach($maxId as $item){
			$maximId = $item->maxId;
		}		
				
		if(isset($_GET['num'])) {
			$number_pageopen = $_GET['num'] - 1;
		}
		else {
			$number_pageopen = 0;
		}
		
		$idFirst = $maximId-$number_pageopen*3;
		$idSecond = $idFirst - 1;
		$idLast = $idFirst - 2;
				
		$result2 = Database::query("SELECT * FROM comment WHERE id IN ('$idFirst', '$idSecond', '$idLast') ORDER BY id desc");
        $comment = array();
				
        while ($obj = $result2->fetch_object()) {
            $comment[$obj->id] = $obj;
        }
        return $comment;
	}
	
	static function countComments(){
		$result = Database::query("SELECT count(id) as countFromDB FROM comment");
        $count = array();
		
        while ($obj = $result->fetch_object()) {
            $count[$obj->id] = $obj;
        }
		
		foreach($count as $item){
			$countComments = $item->countFromDB;
		}	
				
        return $countComments;
	}
	
}?>