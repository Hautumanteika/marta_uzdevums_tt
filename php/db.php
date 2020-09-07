<?php
    if($current_page == 'index'){
        require_once ("addons/rb-mysql.php");   //connect for index.html in main folder
    }
    else {
        require_once ("../addons/rb-mysql.php"); //connect for other folders
    }
    R::setup('mysql:host=localhost;dbname=users','root', ''); //setup database
    session_start();
?>