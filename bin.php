<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Bin</title>
  </head>
  <body>

    <?php
      $name = "TerrificTable55"; //Word
      $cTest = "Test"; //Test
      $int = 10; //integer
      $string = "hello world"; //string
      $float = 3.7; //float
      $boolean = false; //boolean
      $null = null; //null/no value

      $num = 10;
      $num1 = $num; $num2 = $num; $num3 = $num; $num4 = $num;
      $num1++; // add 1 to num
      $num2--; // removing 1 from num
      $num3 += 25; // adding 25 to num
      $num4 -= 25; // removing 25 to num

      // Test
      echo "<h1>PhP $cTest</h1>"; //print something
      echo "<hr>";
      echo "<p>$cTest</p>";
      echo "Another $cTest<br>";
      echo "ln2 of another $cTest<br>";

      // DataTypes
      echo "<h1>PhP DataTypes</h1>"; echo "<hr>";
      echo "String: $string<br>";
      echo "Integer: $int<br>";
      echo "Float: $float<br>";
      echo "Boolean: $boolean<br>";
      echo "Null: $null<br>";

      // String Convertion
      echo "<h1>PhP String actions</h1>"; echo "<hr>"; //print something
      echo "To Lower: ", strtolower($name), "<br>"; //convert to lowercase
      echo "To Upper: ", strtoupper($name), "<br>"; //convert to uppercase
      echo "Array: ", $name[0], "<br>"; // Array actions
      echo "Array SubString: ", substr($name, 0, 8), "<br>"; //Array[:8]

      // Math Operations
      echo "<h1>Math Operations</h1><hr>";
      echo "Calcutating '+' (4+9): ", 4+9, "<br>"; // Calculating +
      echo "Calcutating '/' (4/9): ", 4/9, "<br>"; // Calculating /
      echo "Calcutating '*' (4*9): ", 4*9, "<br>"; // Calculating *
      echo "Modulus (10%3): ", 10%3, "<br>"; // Modulus %
      echo "Absulute value (-10.5): ", abs(-10.5), "<br>"; // Absulute Value
      echo "Power 2^4: ", pow(2, 4), "<br>"; // num to pow of num
      echo "Square Root (144): ", sqrt(144), "<br>"; // Square Root
      echo "num>num (2, 10): ", max(2, 10), "<br>"; // num>num
      echo "num< num (2, 10): ", min(2, 10), "<br>"; // num<num
      echo "Round (3.5): ", round(3.5), "<br>"; // Round
      echo "Round Up (3.4): ", ceil(3.4), "<br>"; // Round Up
      echo "Round Down (3.5): ", floor(3.5), "<br>"; // Round Down

      echo "<h2>Basic Math Rules</h2><hr>";
      echo "Calculating (4+5)*10: ", (4+5)*10, "<br>"; // Prentasys go first
      echo "Calcutating 4+5*10: ", 4+5*10, "<br>"; // Point before line

      echo "<h1>Addition and Subtraction</h1><hr>";
      echo "Base Value: ", $num, "<br>";
      echo "Adding 1 to num: ", $num1, "<br>";
      echo "Removing 1 from num: ", $num2, "<br>";
      echo "Adding 25 to num: ", $num3, "<br>";
      echo "Removing 25 from num: ", $num4, "<br>";
     ?>
  </body>
</html>
