<?php
include 'includes/header.php';

// ** Controler ** //
// find which article to call from the URL
$article_id = $_GET['article_id'];
// redirect if URL does not have a specified article
if (!$article_id) {
  header ("Location: articles.php");
}
//connect to database
$conn = get_connected();
// get relevant article information from database
$sql = "SELECT * from articles where ID = '" . $article_id . "' LIMIT 1";
$result = mysqli_query($conn, $sql);
$all = $result->fetch_assoc();
// get information about the author from the database
$sqlAuthor = "SELECT * from authors where ID = " . $all['Author_id'] . "";
$resultAuth = mysqli_query($conn, $sqlAuthor);
$allAuthor = $resultAuth->fetch_assoc();

// close the connection
mysqli_close($conn);

// ** VIEW **//
// basic container for the articles
echo "    <div class='container'>
            <div class='col-md-12 wrapper'>
              <header class='row'>
                <div class='col-md-8'>";
// specific html for the article section
  echo "          <div class='col-md-12 article'>
                    <a href='/author.php?author_id=" . $all['Author_id'] . "'><h5 class='author'>Author: " . $allAuthor['First_name'] . " " . $allAuthor['Last_name'] . "</h5></a>
                    <h2>" . $all['Title'] . "</h2>
                    <h3>" . $all['Stitle'] . "</h3>
                    <p>" . html_entity_decode($all['Content']) . "</p>
                  </div>
                  <div class='col-md-12 comments'>
                    <h5 class='author'>Comments</h5>
                    ";
include 'includes/comments.php';

// close div on left column
echo "          </div>
              </div>";
// include right column
include 'includes/sidebar.php';
// close basic container
echo "
              </header>
            </div>
          </div>
        </div>";

include 'includes/footer.php';
 ?>
