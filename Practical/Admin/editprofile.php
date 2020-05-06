<?php
require_once('connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Profile setting</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <h2 class="mt-2 ml-2">User Profile Setting</h2>

    <!-- user data fetching -->
    <div class="container">
        <div class="row">

            <?php
              if(isset($_GET['edt']))
              {
                $edit = $_GET['edt'];
                $fetch = mysqli_query($con,"SELECT * from login");
                $display = mysqli_fetch_array($fetch);
              }
            ?>
            <div class="col-lg-4">
            <form method="post" class="mt-4">
            <div class="form-group">
                
              <label>Name</label>
              <input type="text" name="uname" value="<?php echo"$display[1]"?>" class="form-control"/>

              <label>Email</label>
              <input type="email" name="uemail" value="<?php echo"$display[2]"?>" class="form-control"/>

              <label>Password</label>
              <input type="password" name="upass" value="<?php echo"$display[3]"?>" class="form-control"/>
              <br>

              <input type="submit" name="upd" class="btn btn-primary" value="update"/>

            </div>
            </form>
            <?php
            if(isset($_POST['upd']))
            {
              $u_name = $_POST['uname'];
              $u_email = $_POST['uemail'];
              $u_pswd = $_POST['upass'];

              $uque = mysqli_query($con,"UPDATE login set name='$u_name', email='$u_email', password='$u_pswd' where id=$edit");
              if($uque)
              {
                echo "updated";
              }
              else
              {
                echo "try again!";
              }
            }
            ?>
            </div>
        </div>
        <p>changing records will effect your previous data.. </p>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>