<?php
    function active($page){
        $active_page = $_GET['page'];

        if ($page == $active_page) {
            $active = 'active';
        }

        echo $active;
    }
?>