<?php
session_start();
require_once('connection.php');

// login coding
if(isset($_POST['log']))
{
    $c_email = $_POST['lemail'];
    $c_pass = $_POST['lpass'];

    if(empty($c_email) || empty($c_pass))
    {
        header('location:register.php?unfilled= Fill both fields');
    }
    else
    {
    $check = mysqli_query($con, "SELECT * from login where email='$c_email' and password='$c_pass'");
    if(mysqli_fetch_array($check))
    {
        $_SESSION['user'] = $c_email;
        header('location:profile.php');
    }else
    {
        header('location:register.php?unfound= Incorrect username or password');
    }
}
}

// registration coding
if(isset($_POST['reg']))
{
    $uname = $_POST['name'];
    $uemail = $_POST['email'];
    $pswd = $_POST['pass'];

    // validating form
    if(empty($uname) | empty($uemail) | empty($pswd))
    {
        header('location:register.php?warn= all fields are required');
    }
    else{
    $ins_data = mysqli_query($con,"INSERT into login(name,email,password) values('$uname','$uemail','$pswd')"); 
    // checking insertion
    if($ins_data)
    {
        header('location:register.php?success= registered successfully!');
    }
}
}

// feedback form submission
if(isset($_POST['sub']))
{
    $f_name = $_POST['fname'];
    $faculty = $_POST['faculty'];
    $f_class = $_POST['fclass'];
    $month = $_POST['fmonth'];
    $ans_one = $_POST['fone'];
    $ans_two = $_POST['ftwo'];
    $ans_three = $_POST['fthree'];
    $ans_four = $_POST['ffour'];

    if(empty($f_name) || empty($faculty) || empty($f_class) )
    {
        header('location:profile.php?emp= All fields are required');
    }
    else{
    $subque = mysqli_query($con, "INSERT into fbcollection(name,f_id,class,month_name,one,two,three,four) 
    values('$f_name','$faculty','$f_class','$month','$ans_one','$ans_two','$ans_three','$ans_four')");
    if($subque)
    {
        header('location:profile.php?submit= Thanx for your feedback..!');
    }else
    {
        header('location:profile.php');
    }
}
}

// adding faculty code
if(isset($_POST['add']))
{
   $fac_name = $_POST['name'];
   
   $ins_fac = mysqli_query($con, "INSERT into facultyname(faculty) value('$fac_name')");
   if($ins_fac)
   {
       header('location:addfaculty?succ= successfully inserted!');
   }
   else {
       header('location:addfaculty?fail= oops! something went wrong.');
   }
}

?>