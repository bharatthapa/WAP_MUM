<?php 
    $db = new PDO("mysql:dbname=wap;host=localhost", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>