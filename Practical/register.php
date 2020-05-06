<?php
require_once('connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body id="bg">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- forms working -->
    <div class="container">
        <h1 class="mt-4 main_header"><span>Feedback</span> form submission!</h1>
        <h3 class="mt-4 main_header"><a href="Admin/admin.php">Admin Panel</a></h3>
        
    <!-- registration form -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mt-4">
            <div class="register">
                <h2 id="side_header">Register Now!</h2>

                <!-- validation warning code -->
                <?php
                    if(isset($_GET['warn']))
                    {
                        $msg = $_GET['warn'];
                        echo "<p style='color: yellowgreen; text-align:center; 
                        margin-left:1%; text-transform:capitalize;'>$msg</p>";
                    }
                    elseif(isset($_GET['success']))
                    {
                        $msg = $_GET['success'];
                        echo "<p style='color: yellowgreen; text-align:center; 
                        margin-left:1%; text-transform:capitalize;'>$msg</p>";
                    }
                ?>

            <form action="code.php" method="post" class="mt-1">
                <!-- name field -->
                <div class="form-group">
                <label for="Username">Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Username">              
                </div>
    
                <!-- email field -->
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"  placeholder="Email address">              
                </div>
    
                <!-- password field -->
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" minlength="8" class="form-control" name="pass"  placeholder="********">              
                </div>
    
                <input type="submit" name="reg" value="Register" class="btn btn-success"/>
    
                </form>
    
            </div>
        </div>

    <!-- login form coding -->
    <div class="col-lg-6 col-md-6 col-12 mt-4">
        <div class="register">
            <h2 id="side_header">Login Panel</h2>

            <!-- validation coding for login -->
            <?php
                if(isset($_GET['unfound']))
                {
                    $savy = $_GET['unfound'];
                    echo "<p style='color: yellowgreen; text-align:center; 
                    margin-left:1%; text-transform:capitalize;'>$savy</p>";
                }
                elseif(isset($_GET['unfilled']))
                {
                    $savy = $_GET['unfilled'];
                    echo "<p style='color: yellowgreen; text-align:center; 
                    margin-left:1%; text-transform:capitalize;'>$savy</p>";
                }
                
            ?>

            <form action="code.php" method="post" class="mt-1">
                
                <!-- email field -->
                <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" name="lemail"  placeholder="Email address">              
               </div>

               <!-- password field -->
               <!-- city field -->
               <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" class="form-control" name="lpass"  placeholder="********">              
               </div>

               <input type="submit" name="log" value="Login" class="btn btn-success"/>

               <p class="warning_text mt-4">register yourself and give feedback for the following 
                   month. <span>good luck!</span> </p>

           </form>

            </div>
        </div>
    </div>
</div>
  
  
  
  </body>
</html>