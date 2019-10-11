<?php
include 'connect.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>insert and update(php)</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body style="background:#192a56;">
    <?php
    include 'menu.php';
     ?>

     <center>
<h1 style="color:white;"> Names should be appear here.</h1>
     <table >
       <tr>
         <th><h1>fristname</h1></th>
         <th><h1>lastname</h1></th>
         <th><h1>age</h1></th>
       </tr>
     <?php
     $sql = "SELECT * FROM username;";
     $result = mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>".$row['first']."</td>";
       echo "<td>".$row['last']."</td>";
       echo "<td>".$row['age']."</td></tr>";
     }
      ?>
    </table>
  </center>
  <?php
  include 'footer.php';
   ?>
  </body>
</html>
