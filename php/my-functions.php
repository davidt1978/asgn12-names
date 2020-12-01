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

// Define Index

if(!isset($_POST['submit'])) {
 $_POST['submit'] = '';
}



// EOF
