<?php
require_once('connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Admin-Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body style="background-color: slateblue;">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- forms working -->
    <div class="container">
        <h1 class="mt-5 main_header"><span>admin </span>login area</h1>
        
    <!-- login form coding -->
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 col-md-4 mt-5">
                <div class="register">
                    <h2 id="side_header">Login Panel</h2>

                    <?php
                    if(isset($_GET['wrong']))
                    {
                        $show = $_GET['wrong'];
                        echo "<p style='color: yellowgreen; text-align:center; 
                        margin-left:1%; text-transform:capitalize;'>$show</p>";
                    }
                    elseif(isset($_GET['fill']))
                    {
                        $show = $_GET['fill'];
                        echo "<p style='color: yellowgreen; text-align:center; 
                        margin-left:1%; text-transform:capitalize;'>$show</p>";
                    }
                    ?>
            
                <!-- validation coding for login -->
            
                <form action="admincode.php" method="post" class="mt-1">
                            
                    <!-- email field -->
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" class="form-control" name="aname"  placeholder="admin type">              
                    </div>
            
                    <!-- password field -->
                    <!-- city field -->
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="apass"  placeholder="********">              
                    </div>
            
                    <input type="submit" name="adlog" value="Login" class="btn btn-success"/>
            
                    <p class="warning_text mt-4">remember your username and password to login. <span>good luck!</span> </p>
            
                </form>
                </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
  
  
  
  
  </body>
</html>