<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Test</title>
  </head>
  <body>
    <form action="password.php" method="post">
      Name: <input type="password" name="password"><br>
      <input type="submit">
    </form>
    <br><br>

    <?php echo $_POST["password"]; ?>
  </body>
</html>
