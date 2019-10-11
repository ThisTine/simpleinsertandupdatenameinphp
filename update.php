<?php
  include_once 'connect.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>insert and update(php)</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body style="background:#8e44ad;">
    <?php
    include 'menu.php';
     ?>

     <div id="formcenter">
       <div style="display:block;">


<h1 style="text-align:center;color:white;">Update your date</h1>
<center>
     <form action="update.inc.php" method="post">
       <label>select name</label>
       <select class="select-css" required class="select-css" name="upname">
         <option></option>
         <?php
         $sql = "SELECT * FROM username;";
         $result = mysqli_query($conn , $sql);
         while ($row = mysqli_fetch_assoc($result)) {
           echo "<option value=' ".$row['uid']."'>".$row['first']."</option>";
         }
          ?>
       </select>
       <br>
       <input name="first" required type="text" placeholder="firstname">
       <input name="last" required type="text" placeholder="lastname">
       <input name="age" required type="number" placeholder="age"> <br><br>
       <button type="submit" name="submit">update</button>
     </form>
     </center>
       </div>
   </div>
   <?php
   include 'footer.php';
    ?>
  </body>
</html>
