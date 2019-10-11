<?php
require_once 'connect.php';
$first = $_POST['first'];
$last = $_POST['last'];
$age = $_POST['age'];
 $insert = "INSERT INTO username (first, last, age) VALUES ('$first', '$last', '$age');";
 mysqli_query($conn , $insert);
 header("location: index.php");
 ?>
 <script type="text/javascript">
   alert("insert successful");
   window.location = "index.php";
 </script>
