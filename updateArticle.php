<?php

include 'includes/t4l_config.php';
if (!$_POST['submit'])  {
  header("Location: articles.php");
}
$conn = get_connected();

$article_id = $_POST['article_id'];
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

$sql = "UPDATE articles SET Author_id = $all[0], Title = '$title', Stitle = '$stitle', Last_modified = '$date', Content = '$content', Subject = '$subject'
        WHERE ID =" . $article_id;

if ($conn->query($sql) === TRUE) {
    header("Location: createArticle.php");
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_close($conn);

 ?>
