/* a cheatsheet for php
Please, enjoy.
*/

<?php
 // To include php code in a file.php
?>

<?php

  // Comment one line
  # Also Comment
  /* paragraph
  Comment
  */

  echo "<p> Part of html code </p>"; // Just echo to web browser

  function funcName () {
    // Write some cool php code here
  }

  $StrVar = "String"; //String variable
  $IntVar = 3; //Integer variable

  // Datatypes: integers, floats, strings, boolean, arrays, objects, resources, NULL

  // Example of function from all details above: php, echo, function and variables
  function multipleInt ($x) {
    $newNum = $x*2;
    echo "Result of multiple int: ".$newNum;
  }

  $x = 3;
  multipleInt($x);

  // Predefined variables
  $GLOBALS //
  $_SERVER //
  $_GET //
  $_POST //
  $_REQUEST //

  // Constants:
  __LINE__
  __FILE__

  // Conditional statements
  if (condition) {
    // code...
  }
  elseif (condition) {
    // code...
  }
  else {
    // code...
  }

  // Arrays:
  // Indexed array:
  $data = array("String", 5.4, 5);
  // Associatuve array:
  $data = array("Str"=>"String", "float"=>5.4, "int"=>5);
  // Multidimenstional array:
  $data = array("String", 12), "String", 4.3);

  // PHP Loops
  for ($i=0; $i < ; $i++) {
    // code...
  }

  foreach ($variable as $key => $value) {
    // code...
  }

  while ($a <= 10) {
    // code...
  }

  do {
    // code...
  } while ($a <= 10);
