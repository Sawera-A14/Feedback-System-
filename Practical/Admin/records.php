<?php
require_once('connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Records</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  
    <style>
    #box{
        width: 100%;
        height: 50px;
        background-color: slateblue;
    }
    #main_header{
        color: #ffffff;
        font-weight: bold;
        padding: 5px;
        font-family: verdana;
        text-align: center;
        text-transform: capitalize;
    }
    table{
        top: 30%;
        /* width: 650px; */
        /* margin-left: 20%; */
        text-align: center;
    }
    th{
        font-family: verdana;
        text-decoration: none;
        font-weight: lighter;
    }
    </style>

  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
   <div class="container-fluid">
    <div id="box">
        <h3 id="main_header">student's feedback record</h3>
    </div>
   </div>
  
   <!-- fetching records from database -->

    <!-- conditions -->
    <?php
    $c = 0;
    if(isset($_GET['page']))
    {
        $c = $_GET['page'];
    }
    if($c == 0 || $c == 1)
    {
        $c = 0;
    }
    else
    {
        $c = ($c*5)-5;
    }


    ?>


  <div class="container">
    <table border="2" class="table table-bordered mt-5">
        <thead>
            <tr class="info">
                <th>Student Name</th>
                <th>Faculty Name</th>
                <th>Class / Year</th>
                <th>Month Name</th>
                <th>Ontime Class</th>
                <th>Faculty Guide</th>
                <th>Topics Coverage</th>
                <th>Report delieverd</th>
            </tr>

            <?php
            $fetch_details = mysqli_query($con,"SELECT * from fbcollection limit $c,5");
            while($row = mysqli_fetch_array($fetch_details))
            {
                echo "
                <tr>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                <td>$row[6]</td>
                <td>$row[7]</td>
                <td>$row[8]</td>
                </tr>
                ";
            }
            ?>

        </thead>
       
    </table>

    <!-- pagination -->
    <?php
    $show = mysqli_query($con, "SELECT * from fbcollection");
    $rows = mysqli_num_rows($show);
    $div = ceil($rows/5);

    for($i = 1; $i <= $div; $i++)
    {
        echo "<a class='btn btn-primary' href='records.php?page=$i'>$i</a>";
    }
    ?>

  </div>
  
  </body>
</html>