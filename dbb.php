<?php
session_start();

$db = new mysqli('139.180.204.167','root','1234','hyunsung');
$db->set_charset("utf8");

function mq($sql){
    global $db;
    return $db->query($sql);
}

?>
