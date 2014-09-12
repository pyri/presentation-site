<?php
class Route
{
    static function renderContent()
    {	
        if (isset($_GET['page'])) /* Если есть знак вопроса в адресной строке (URL).  По русски: в массив $_GET передали значения  */
        {
            $file = "view/pages/" . $_GET['page'] . "_view.php"; // файл с названием $_GET['page']
            if (file_exists($file)) {
                require_once($file);
            } else {
                echo "404. File not found";
            }
        } else {
            require_once("view/pages/mainpage_view.php"); // выводим список всех книг
        }
    }
}
?>