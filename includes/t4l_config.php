<?php

// database functions
// TODO: confirm that this DB is protected
function get_connected()  {
  $dbaddyLive = "mysql.tech4lawyers.com";
  $dbaddy = "Localhost";
  $dbuserLive = "tech4lawyerscom";
  $dbuser = "Zack";
  $dbpwLive = "JWLnZT4b";
  $dbpw = "glockner605";
  $dbdbLive = "tech4lawyers_com";
  $dbdb = "tech4lawyers";
  $conn = mysqli_connect("mysql.tech4lawyers.com", "tech4lawyerscom", "JwLnZT4b", "tech4lawyers_com");
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
