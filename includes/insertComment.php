<?php
date_default_timezone_set('America/Chicago');
include 't4l_config.php';
// get article id out of POST variable so we can redirect if necessary
$article_id = $_POST['article_id'];
// redirect to articles if user does not have submit in POST variables
if (!$_POST['submit'])  {
  header("Location: /articles.php");
}
if (!$_POST['name'])  {
  header("Location: /article.php?article_id=" . $article_id . "&error=1");
}
if (!$_POST['name'])  {
  header("Location: /article.php?article_id=" . $article_id . "&error=1");
}
// if captcha no good, then redirect with error code
if(isset($_POST['g-recaptcha-response'])) {
  $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
  header("Location: /article.php?article_id=" . $article_id . "&error=6");
  die();
}

// CONTROLLER //
// Connect to db
$conn = get_connected();
// get variables out of POST
$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$content = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$date = date("Y/m/d h:i:sa");
// Insert the comment into the db
$sql = "INSERT into comments (Name, Email, Date, Body, Article_id)
        VALUES ('$name', '$email', '$date', '$content', '$article_id')";
if ($conn->query($sql) === TRUE) {
    header("Location: /article.php?article_id=" . $article_id);
} else {
    echo "Error updating record: " . $conn->error;
}
 ?>
