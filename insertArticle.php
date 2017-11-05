<?php
include 'includes/t4l_config.php';
if (!$_POST['submit'])  {
  header("Location: articles.php");
}
$conn = get_connected();

$author = $_POST['author'];
$title = $_POST['title'];
$stitle = $_POST['stitle'];
$tags = $_POST['tags'];
$content = htmlentities($_POST['content'], ENT_QUOTES);
$subject = $_POST['subject'];
$date = date("m/d/Y");


$name = explode(' ', $author);

$sqlAuthor = "SELECT ID from authors where First_name = '" . $name[0] . "' and Last_name = '" . $name[1] . "'";
$results = mysqli_query($conn, $sqlAuthor);
$all = $results->fetch_row();
//print_r($all[0]);

$sql = "INSERT into articles (Author_id, Title, Date_created, Content, Subject)
        VALUES ('$all[0]', '$title', '$date', '$content', '$subject')";

if ($conn->query($sql) === TRUE) {
    header("Location: createArticle.php");
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_close($conn);

 ?>
