<?php

include 'header.php';

$article_id = $_GET['article_id'];
$conn = get_connected();

$sql = "SELECT * from articles where ID = '" . $article_id . "' LIMIT 1";
$result = mysqli_query($conn, $sql);
$all = $result->fetch_assoc();

$sqlAuthor = "SELECT * from authors where ID = " . $all['Author_id'] . "";
$resultAuth = mysqli_query($conn, $sqlAuthor);
$allAuthor = $resultAuth->fetch_assoc();

mysqli_close($conn);




// TODO: add BIO section for authors
echo "    <div class='container'>
            <div class='col-md-12 wrapper'>
              <header class='row'>
                <div class='col-md-8'>";

echo "          <div class='col-md-12 article'>
                  <h5 class='author'>Author: " . $allAuthor['First_name'] . " " . $allAuthor['Last_name'] . "</h5>
                  <h2>" . $all['Title'] . "</h2>
                  <h3>" . $all['Stitle'] . "</h3>
                  <p>" . html_entity_decode($all['Content']) . "</p>
                </div>";


echo "         </div>";

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

// TODO: add comments section with Users

include 'footer.php';
 ?>
