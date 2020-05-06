<?php
session_start();
require_once('connection.php');

if(isset($_GET['logout']))
{
    session_destroy();
    header('location:admin.php');
}
?>