<?php
  include_once 'connect.php';
  $upname = $_POST['upname'];
  $first = $_POST['first'];
  $last = $_POST['last'];
  $age = $_POST['age'];
  $update = "UPDATE username SET first='$first', last='$last', age='$age' WHERE uid='$upname';";
  mysqli_query($conn,$update);
  ?>
  <script type="text/javascript">
    alert("update successful");
    window.location = "update.php";
  </script>
