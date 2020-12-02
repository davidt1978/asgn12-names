<?php

// HTML Page Elements

function back_to_index() {
  echo ('<a href="index.php">Back to asgn11</a>');
}

function head_info() {
  echo ('<meta charset="utf-8">');
  echo ('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
  echo ('<link rel="stylesheet" href="../css/styles.css">');
}

// Name Functions

// Remove names from file and remove names that begin with a number.

$nameFile = fopen("asgn12-names.txt", "r");
$nameRecord = fgets($nameFile);

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

// Full count of all the names left.

$namesCount = count($fullNameArray);
$namesCount = number_format($namesCount);

// Pull out only the unique values, count them, and format the count for all three arrays.

$uniqueFullNameArray = array_unique($fullNameArray);
$uniqueFirstNameArray = array_unique($firstNameArray);
$uniqueLastNameArray = array_unique($lastNameArray);

$fullNameCount = count($uniqueFullNameArray);
$firstNameCount = count($uniqueFirstNameArray);
$lastNameCount = count($uniqueLastNameArray);   

$fullNameCount = number_format($fullNameCount);
$fistNameCount = number_format($firstNameCount);
$lastNameCount = number_format($lastNameCount);

// Create sorted array of first and last names with counts.

$lastNameCountArray = array_count_values($lastNameArray);
asort($lastNameCountArray);

$firstNameCountArray = array_count_values($firstNameArray);
asort($firstNameCountArray);

// EOF
