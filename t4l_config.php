<?php

// database functions
function get_connected()  {
  $dbaddy = "localhost";
  $dbuser = "Zack";
  $dbpw = "glockner605";
  $dbdb = "tech4lawyers";
  $conn = mysqli_connect("localhost", "zack", "glockner605", "tech4lawyers");
  if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
  }
  return $conn;
}

function shorten_string($string, $wordsreturned)
/*  Returns the first $wordsreturned out of $string.  If string
contains fewer words than $wordsreturned, the entire string
is returned.
*/
{
$retval = $string;      //  Just in case of a problem

$array = explode(" ", $string);
if (count($array)<=$wordsreturned)
/*  Already short enough, return the whole thing
*/
{
$retval = $string;
}
else
/*  Need to chop of some words
*/
{
array_splice($array, $wordsreturned);
$retval = implode(" ", $array)." . . .";
}
return $retval;
}

?>
