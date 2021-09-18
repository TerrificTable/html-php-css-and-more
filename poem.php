<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Poem</title>
  </head>
  <body>
    <form action="poem.php" method="get">
      Color: <input type="text" name="color"><br>
      Plural Noun: <input type="text" name="pluralNoun"><br>
      Celebrity: <input type="text" name="celebrity"><br>
      <input type="submit">
    </form>

    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "<br> Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I lovde $celebrity <br>";
     ?>
  </body>
</html>
