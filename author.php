<?php
include 'includes/header.php';
// Controller //
$author_id = $_GET['author_id'];
if (!$author_id)  {
  header ("location: index.php");
}
// connect to database
$conn = get_connected();
// query all author information
$sql = "SELECT * from authors where ID = " . $author_id;
$result = mysqli_query($conn, $sql);
$all = $result->fetch_assoc();
// query all articles related to that author
$sqlArticles = "SELECT Title, ID, Content from articles where Author_id = " . $author_id;
$resultArt = mysqli_query($conn, $sqlArticles);
$allArt = $resultArt->fetch_assoc();
// close database connection
mysqli_close($conn);
// create a small string out of the longer content
$string = html_entity_decode($allArt[Content]);
$blip = shorten_string($string, 30);

// View //
// container
echo "    <div class='container'>
            <div class='col-md-12 wrapper'>
              <header class='row'>
                <div class='col-md-8'>";
// Main author content
echo "            <div class='col-md-12 article'>
                    <h4 class='author'>" . $all['First_name'] . " " . $all['Last_name'] . "</h4>
                    <img src='" . $all['Photo_url'] . "' width='150px'>
                    <p>" . $all['Author_bio'] . "</p>
                  </div>
                  <div class='col-md-12'>
                    <h5 class='text-center upperBorder'>Articles:</h4>
                    <p><strong>" . $allArt['Title'] . "</strong></p>
                    <p>" . $blip . "</p>
                  </div>";
echo "
                </div>";
// Begin second column
include 'includes/sidebar.php';

echo "
              </header>
            </div>
          </div>
        </div>";


include 'includes/footer.php';
