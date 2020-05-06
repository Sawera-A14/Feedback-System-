<?php
session_start();
require_once('connection.php');

if(isset($_POST['adlog']))
{
    $admin_name = $_POST['aname'];
    $admin_pass = $_POST['apass'];

    if(empty($admin_name) || empty($admin_pass) )
    {
        header('location:admin.php?fill= fields cannot be empty');
    }
    else
    {
    $sawera = mysqli_query($con,"SELECT * from adminlogin where name='$admin_name' and password='$admin_pass'");
    if(mysqli_fetch_array($sawera))
    {
        $_SESSION['admin'] = $sawera;
        header('location:index.php');
    }else
    {
        header('location:admin.php?wrong= Incorrect data entry');
    }
}
}




?>