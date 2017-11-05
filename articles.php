<?php
include 'includes/header.php';

$conn = get_connected();

$sql = "SELECT * from articles";
$results = mysqli_query($conn, $sql);

mysqli_close($conn);


echo "    <div class='container'>
            <div class='col-md-12 wrapper'>
              <section class='row'>
                <div class='col-md-8'>";

foreach ($results as $result){
  $blip = shorten_string($result['Content'], 75);
  $body = html_entity_decode($blip);
  echo "        <div class='col-md-12 article'>
                  <h2>" . $result['Title'] . "</h2>
                  <h3>" . $result['Stitle'] . "</h3>
                  <p>" . $body . "</strong></p>
                  <a href='/article.php?article_id=" . $result['ID'] . "' class='btn btn-primary'>Read More . . .</a><hr>
                </div>";
}

echo "          </div>
                <div class='col-md-4'>";

include 'includes/featuredArticle.php';

echo "          </div>
              </section>
            </div>
          </div>";

include 'footer.php';

 ?>
