<?php
include 'includes/t4l_config.php';
// Redirect if user accesses without submit variable in POST
if (!$_POST['submit'])  {
  header("Location: articles.php");
}
// CONTROLER //
// Connect to db
$conn = get_connected();
// get information that was passed in POST form
$article_id = $_POST['article_id'];
$author = $_POST['author'];
$title = $_POST['title'];
$stitle = $_POST['stitle'];
$tags = $_POST['tags'];
$content = htmlentities($_POST['content'], ENT_QUOTES);
$subject = $_POST['subject'];
$date = date("m/d/Y");
// Separate Author variable into first and last name
$name = explode(' ', $author);
// query to get author ID related to author passed from form
$sqlAuthor = "SELECT ID from authors where First_name = '" . $name[0] . "' and Last_name = '" . $name[1] . "'";
$results = mysqli_query($conn, $sqlAuthor);
$all = $results->fetch_row();
// query and update article that is being edited
$sql = "UPDATE articles SET Author_id = $all[0], Title = '$title', Stitle = '$stitle', Last_modified = '$date', Content = '$content', Subject = '$subject'
        WHERE ID =" . $article_id;
if ($conn->query($sql) === TRUE) {
    header("Location: createArticle.php");
} else {
    echo "Error updating record: " . $conn->error;
}
// close db connection
mysqli_close($conn);
 ?>
