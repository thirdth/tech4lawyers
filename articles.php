<?php
include 'includes/header.php';
// Connect to database
$conn = get_connected();
// CONTROLER //
// get all info from articles table
$sql = "SELECT * from articles where Live=1";
$results = mysqli_query($conn, $sql);
// close the connection to the database
mysqli_close($conn);

// VIEW //
echo "    <div class='container'>
            <div class='col-md-12 wrapper'>
              <section class='row'>
                <div class='col-md-8'>";
// iterate through articles and display information
foreach ($results as $result){
  // Shorten content string to 75 words
  $blip = shorten_string($result['Content'], 75);
  // Decode the shortened string so it can display HTML
  $body = html_entity_decode($blip);
  echo "        <div class='col-md-12 article'>
                  <small>" . $result['Date_created'] . "</small>
                  <h2>" . $result['Title'] . "</h2>
                  <h3>" . $result['Stitle'] . "</h3>
                  <p>" . $body . "</strong></p>
                  <a href='/article.php?article_id=" . $result['ID'] . "' class='btn btn-primary'>Read More . . .</a><hr>
                </div>";
}

echo "          </div>
                <div class='col-md-4'>";
// Start second Column
include 'includes/featuredArticle.php';

echo "          </div>
              </section>
            </div>
          </div>";

include 'includes/footer.php';
?>
