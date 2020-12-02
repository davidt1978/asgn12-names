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
    $nameFile = fopen("asgn12-names.txt", "r");
    $nameRecord = fgets($nameFile);
    $fullNameArray = array();
    $firstNameArray = array();
    $lastNameArray = array();
    $lastNameCount = array();
    $firstNameCount = array();
    
    while (!feof($nameFile)) {
      if (substr($nameRecord, 0, 1) != " " and is_numeric(substr($nameRecord, 0, 1)) != 1) {
        list ($lName, $fName) = explode(" ", $nameRecord);
        $lName = substr($lName, 0, -1);
              
        $fullNameArray[] = "$lName$fName";
        $firstNameArray[] = "$fName";
        $lastNameArray[] = "$lName";
      }
      $nameRecord = fgets($nameFile);
    }
    
    fclose($nameFile);
    
    $namesCount = count($fullNameArray);
    $namesCount = number_format($namesCount);
    print("<p>The total number of names is $namesCount.");
    
    $uniqueFullNameArray = array_unique($fullNameArray);
    $uniqueFirstNameArray = array_unique($firstNameArray);
    $uniqueLastNameArray = array_unique($lastNameArray);
    
    $fullNameCount = count($uniqueFullNameArray);
    $firstNameCount = count($uniqueFirstNameArray);
    $lastNameCount = count($uniqueLastNameArray);   
    
    $fullNameCount = number_format($fullNameCount);
    $fistNameCount = number_format($firstNameCount);
    $lastNameCount = number_format($lastNameCount);
    
    print("<p>The number of unique full names is $fullNameCount.</p>");    
    print("<p>The number of unique first names is $firstNameCount.</p>");    
    print("<p>The number of unique last names is $lastNameCount.</p>");
    
   
    $lastNameCount = array_count_values($lastNameArray);
    asort($lastNameCount);
    print("<p>The top last names are as follows.</p>");
    print("<ol>");
    $c = 0;
    while ($c < 10) {
      if ($c == 0) {
        $lNameCountOne = end($lastNameCount);
        $lNameOne = key($lastNameCount);
        print("<li>$lNameOne: $lNameCountOne</li>");
      } else {
        $lNameCountOne = prev($lastNameCount);
        $lNameOne = key($lastNameCount);
        print("<li>$lNameOne: $lNameCountOne</li>");
      }
      $c++;
    }
    print("</ol>");
    
    $firstNameCount = array_count_values($firstNameArray);
    asort($firstNameCount);
    print("<p>The top first names are as follows.</p>");
    print("<ol>");
    $c = 0;
    while ($c < 10) {
      if ($c == 0) {
        $fNameCountOne = end($firstNameCount);
        $fNameOne = key($firstNameCount);
        print("<li>$fNameOne: $fNameCountOne</li>");
      } else {
        $fNameCountOne = prev($firstNameCount);
        $fNameOne = key($firstNameCount);
        print("<li>$fNameOne: $fNameCountOne</li>");
      }
      $c++;
    }
    print("</ol>");
    
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
