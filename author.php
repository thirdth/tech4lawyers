<?php

include 'header.php';


$author_id = $_GET['author_id'];
$conn = get_connected();

$sql = "SELECT * from authors where ID = " . $author_id;
$result = mysqli_query($conn, $sql);
$all = $result->fetch_assoc();

$sqlArticles = "SELECT Title, ID, Content from articles where Author_id = " . $author_id;
$resultArt = mysqli_query($conn, $sqlArticles);
$allArt = $resultArt->fetch_assoc();

mysqli_close($conn);

$string = html_entity_decode($allArt[Content]);
$blip = shorten_string($string, 30);

echo "    <div class='container'>
            <div class='col-md-12 wrapper'>
              <header class='row'>
                <div class='col-md-8'>";



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

include 'sidebar.php';

echo "
              </header>
            </div>
          <section class='row'>


          </section>
          <section class='row'>

          </section>
      </div>
    </div>";


include 'footer.php';
