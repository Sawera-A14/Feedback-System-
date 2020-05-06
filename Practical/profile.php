<?php
require_once('connection.php');
// require_once('navbar.php');
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
  
    <!-- main style sheet -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        .navbar-brand, .navbar-brand:hover{
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
        }
        ul li a{
            color: #ffffff;
        }
         ul li a:hover{
             color: #000000;
            background-color: #ffffff;
        }
    </style>

  </head>
<body>
    <div class="container-fluid">

        <!-- main navbar -->
        <nav class="navbar navbar-expand-sm bg-dark ">
        <a class="navbar-brand" href="#">Feedback Portal</a>

        <!-- toggle button -->
        <button class="navbar-toggler bg-light d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>

        <!-- nav-links -->
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Home</a>
                </li>
            </ul>          
        </div>
        </nav>

        <div class="container">
           <div class="row">

                <!-- display user name -->
               <div class="col-lg-6 mt-3">
               <?php
                session_start();
                if($_SESSION['user'])
                {
                echo "<h3 class='user_header'>Welcome!". " " . $_SESSION['user']. "</h3>" ;
                }else
                {
                header('location:register.php');
                }
                ?>
               </div>

               <!-- logout option -->
               <div class="col-lg-6 mt-4">
                <a class="btn btn-primary" style="float: right;" href="logout.php?out" role="button">Logout</a>
               </div>
           </div>
        </div>
    </div>

    <!-- display image -->
    <div class="container">
        <img src="images/feed.jpg" alt="feed" width="250" height="150" />
    </div>

    <!-- validation coding -->
    <?php
    if(isset($_GET['submit']))
    {
    $write = $_GET['submit'];
    echo "<p style='color: yellowgreen; font-size:1rem; text-align:center; 
    margin-left:1%; text-transform:capitalize;'>$write</p>";
    }
    elseif(isset($_GET['emp']))
    {
    $write = $_GET['emp'];
    echo "<p style='color: red; font-size:1rem; text-align:center; 
    margin-left:1%; text-transform:capitalize;'>$write</p>";
    }
    ?>

    <!-- feedback form -->
    <div class="container">
        <form action="code.php" method="post">
            <div class="form-group">

                <div class="row">
                    <div class="col-lg-6">

                        <label class="text-dark">Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="student name"/><br>
                        
                        <label class="text-dark">Class</label>
                        <input type="text" name="fclass" class="form-control" placeholder="class"/><br>

                    </div>
                    <div class="col-lg-6">

                        <!-- 
                        <input type="text" name="faculty" class="form-control" placeholder=""/><br> -->
                        <label class="text-dark mt-1">Faculty</label><br>
                        <select name="faculty">
                            <!-- <option value="">Choose Faculty</option> -->
                            <?php
                                $fetch = mysqli_query($con, "SELECT * from facultyname");
                                while($row = mysqli_fetch_array($fetch))
                                {
                                    echo "<option value='$row[0]'>$row[1]</option>";
                                }
                            ?>
                        </select>
                        <br>
                        <br>

                        <label class="text-dark mt-2">Month</label>
                        <input type="text" name="fmonth" class="form-control" placeholder="month"/><br>

                    </div>

                    <div class="col-lg-12">

                        <!-- Q/A for feedback form  -->
                        <label class="text-dark">Do classes held on time?</label>
                        <input type="text" name="fone" class="form-control" placeholder="yes/no"/><br>

                        <label class="text-dark">Does faculty guide you during class?</label>
                        <input type="text" name="ftwo" class="form-control" placeholder="yes/no"/><br>

                        <label class="text-dark">Does faculty cover topics within due date?</label>
                        <input type="text" name="fthree" class="form-control" placeholder="yes/no"/><br>

                        <label class="text-dark">Do report cards deliverd on time?</label>
                        <input type="text" name="ffour" class="form-control" placeholder="yes/no"/><br>
                        
                        <input type="submit" class="btn btn-success" name="sub" value="Submit"/>

                    </div>

                </div>
            </div>
        </form>
    </div>



     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>