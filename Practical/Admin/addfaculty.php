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
  </head>
  <body>
      
  <div class="container">
  <h1 class="mt-5">Add Faculty Page</h1>
      <div class="row">     
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
              <form action="code.php" method="post" class="mt-3">

              <div class="form-group">
                <label for="">Faculty Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <input type="submit" name="add" class="btn btn-primary" value="Add">

              </form>

              <!-- validation -->
              <?php
              if(isset($_GET['succ']))
              {
                  $sawo = $_GET['succ'];
                  echo "<p style='color: green; font-size:1rem; text-align:center; 
                  margin-left:1%; text-transform:capitalize;'>$sawo</p>";
              }
              elseif(isset($_GET['fail']))
              {
                  $sawo = $_GET['fail'];
                  echo "<p style='color: red; font-size:1rem; text-align:center; 
                  margin-left:1%; text-transform:capitalize;'>$sawo</p>";
              }
              ?>

          </div>
          <div class="col-lg-4"></div>
      </div>

      <div class="container">
      <table border="1" style="width: 600px; text-align: center; margin-top: 5%;
    margin-left: 20%;" >
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
        </tr>
      </thead>

      <!-- display records query -->
      <?php
      $dque = mysqli_query($con,"SELECT * from facultyname");
      while($fque = mysqli_fetch_array($dque))
      {
        echo "<tr>
        <td>$fque[0]</td>
        <td>$fque[1]</td>
        </tr>";
      }      
      ?>
    </table>
      </div>
  </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  


</body>
</html>