<?php
// Connect to db
$conn = get_connected();
// CONTROLER //
// get info about featured article
$sql = "SELECT * from articles where Featured = 1";
$result = mysqli_query($conn, $sql);
$all = $result->fetch_assoc();
// decode content for HTML display
$string = html_entity_decode($all[Content]);
// sorten content
$blip = shorten_string($string, 30);
// close db connection
mysqli_close($conn);
// VIEW //
echo "<div class='col-md-12 feature'>
        <h3 class='text-center head'><strong>Featured Article</strong></h3>
        <hr>
        <h4><strong>" . $all[Title] . "</strong></h4>
        <h5>" . $all[Stitle] . "</h5>
        <p>" . $blip . "</p>

          <a href='/article.php?article_id=" . $all[ID] . "' class='btn pull-right'>Read More . . .</a>
      </div>";
?>
