<?php

// database functions
// TODO: confirm that this DB is protected
function get_connected()  {
  $dbaddy = "66.33.203.111";
  $dbuser = "tech4lawyerscom";
  $dbpw = "JwLnZT4b";
  $dbdb = "tech4lawyers_com";
  $conn = mysqli_connect($dbaddy, $dbuser, $dbpw, $dbdb);
  if (!$conn) {
  //  echo phpinfo();
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
