<?php
session_start();
require_once('connection.php');

if(isset($_GET['out']))
{
    session_destroy();
    header('location:register.php');
}

?>
