<!DOCTYPE html>
<?php
  include("php/my-functions.php");
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Name Games</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <h1>Name Games</h1>    
      </header>

      <main>
        <?php
    /*** Standard Statistics ***/
    print("<p>The total number of names is $namesCount.</p>");
    print("<p>The number of unique full names is $fullNameCount.</p>");    
    print("<p>The number of unique first names is $firstNameCount.</p>");    
    print("<p>The number of unique last names is $lastNameCount.</p>");
  
    /*** Top Ten Last Names ***/
    print("<p>The top last names are as follows.</p>");
    print("<ol>");
    $c = 0;
    while ($c < 10) {
      if ($c == 0) {
        $lNameCountOne = end($lastNameCountArray);
        $lNameOne = key($lastNameCountArray);
        print("<li>$lNameOne: $lNameCountOne</li>");
      } else {
        $lNameCountOne = prev($lastNameCountArray);
        $lNameOne = key($lastNameCountArray);
        print("<li>$lNameOne: $lNameCountOne</li>");
      }
      $c++;
    }
    print("</ol>");
  
    /*** Top Ten First Names ***/
    print("<p>The top first names are as follows.</p>");
    print("<ol>");
    $c = 0;
    while ($c < 10) {
      if ($c == 0) {
        $fNameCountOne = end($firstNameCountArray);
        $fNameOne = key($firstNameCountArray);
        print("<li>$fNameOne: $fNameCountOne</li>");
      } else {
        $fNameCountOne = prev($firstNameCountArray);
        $fNameOne = key($firstNameCountArray);
        print("<li>$fNameOne: $fNameCountOne</li>");
      }
      $c++;
    }
    print("</ol>");
    
    /*** Unique Full Names ***/
    $i = 0;
    print("<p>25 unique name from the data set are as follows.");
    print("<ol>");
    while ($i < 25) {
      if ($i == 0) {
        $fNameU = reset($uniqueFirstNameArray);
        $lNameU = reset($uniqueLastNameArray);
        print("<li>$lNameU, $fNameU");
      } else {
        $fNameU = next($uniqueFirstNameArray);
        $lNameU = next($uniqueLastNameArray);
        print("<li>$lNameU, $fNameU");
      }
      $i++;
    }
      print("</ol>");
    
    /*** Modified Unique Full Names ***/
    $n = 0;
    print("<p>25 modified unique name from the data set are as follows.");
    print("<ol>");
    while ($n < 25) {
      if ($n == 0) {
        $fNameU = reset($uniqueFirstNameArray);
        $fNameU = next($uniqueFirstNameArray);
        $lNameU = reset($uniqueLastNameArray);
        print("<li>$lNameU, $fNameU");
      } else {
        $fNameU = next($uniqueFirstNameArray);
        $lNameU = next($uniqueLastNameArray);
        print("<li>$lNameU, $fNameU");
      }
      $n++;
    }
    print("</ol>");
        
        ?>
      </main>

      <footer>
        <a href="../index.php">Return to WEB182</a>
      </footer>
    </div>
  </body>
</html>
