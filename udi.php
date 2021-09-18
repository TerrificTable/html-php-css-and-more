<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP UDI</title>
  </head>
  <body>
    <?php echo "<h1>User Data Input</h1><hr>"; // User Data Input ?>
     <form action="udi.php", method="get">
       Name: <input type="text" name="user_name">
       <br>
       Age: <input type="number" name="user_age">
       <input type="submit">
     </form>

     Name: <?php echo $_GET["user_name"], "<br>"; // Get Form input?>
     Age: <?php echo $_GET["user_age"], "<br>"; ?>

  </body>
</html>
