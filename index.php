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
    $nameFile = fopen("asgn12-names-short.txt", "r");
    $nameRecord = fgets($nameFile);
    $fullNameArray = array();
    $firstNameArray = array();
    $lastNameArray = array();
    
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

  
        ?>
      </main>

      <footer>
        <a href="../index.php">Return to WEB182</a>
      </footer>
    </div>
  </body>
</html>
