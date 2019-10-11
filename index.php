 <!DOCTYPE html>
 <html>
   <head>
     <title>insert and update(php)</title>
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body style="background:#2980b9;">
     <?php
     include 'menu.php';
      ?>

      <div id="formcenter">
        <div style="display:block;">

<center>
<h1 style="text-align:center;color:white;">Plese insert the name here</h1>
      <form action="insert.php" method="post">
        <input name="first" required type="text" placeholder="firstname">
        <input name="last" required type="text" placeholder="lastname">
        <input name="age" required type="number" placeholder="age"> <br><br><center>
        <button type="submit" name="submit">insert</button> </center>
      </form>
    </center>
        </div>
    </div>
    <?php
    include 'footer.php';
     ?>
   </body>
 </html>
