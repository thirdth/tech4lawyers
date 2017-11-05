<?php


$conn = get_connected();

$sql = "SELECT * from articles where Featured = 1";
$result = mysqli_query($conn, $sql);
$all = $result->fetch_assoc();
// print_r($all);

$string = html_entity_decode($all[Content]);

$blip = shorten_string($string, 30);
mysqli_close($conn);

echo "<div class='col-md-12 feature'>
        <h3 class='text-center head'><strong>Featured Article</strong></h3>
        <hr>
        <h4><strong>" . $all[Title] . "</strong></h4>
        <h5>" . $all[Stitle] . "</h5>
        <p>" . $blip . "</p>

          <a href='/article.php?article_id=" . $all[ID] . "' class='btn pull-right'>Read More . . .</a>

      </div>";

?>
