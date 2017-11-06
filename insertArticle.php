<?php
include 'includes/t4l_config.php';
// redirect to articles if user does not have submit in POST variables
if (!$_POST['submit'])  {
  header("Location: articles.php");
}
// CONTROLLER //
// Connect to db
$conn = get_connected();
// get variables out of POST
$author = $_POST['author'];
$title = $_POST['title'];
$stitle = $_POST['stitle'];
$tags = $_POST['tags'];
$content = htmlentities($_POST['content'], ENT_QUOTES);
$subject = $_POST['subject'];
$date = date("m/d/Y");
// Split author name into first and last
$name = explode(' ', $author);
// Get the ID related to the relevant Author
$sqlAuthor = "SELECT ID from authors where First_name = '" . $name[0] . "' and Last_name = '" . $name[1] . "'";
$results = mysqli_query($conn, $sqlAuthor);
$all = $results->fetch_row();
// Insert the article into the db
$sql = "INSERT into articles (Author_id, Title, Date_created, Content, Subject)
        VALUES ('$all[0]', '$title', '$date', '$content', '$subject')";
if ($conn->query($sql) === TRUE) {
    header("Location: createArticle.php");
} else {
    echo "Error updating record: " . $conn->error;
}
// Close db connection
mysqli_close($conn);
 ?>
