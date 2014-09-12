<?php
class Route
{
    static function renderContent()
    {			
        if (isset($_GET['page'])) 
        {
            $file = "view/pages/" . $_GET['page'] . "_view.php";
            if (file_exists($file)) {
                require_once($file);
            } else {
                echo "404. File not found";
            }
        } else {
            require_once("view/pages/mainpage_view.php");
        }
    }
}
?>