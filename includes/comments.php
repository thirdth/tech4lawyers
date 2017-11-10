<?php

$article_id = $_GET['article_id'];
$conn = get_connected();
// get comments
$sqlComment = "SELECT * from comments where Article_id =" . $article_id . " ORDER BY date";
$resComment = mysqli_query($conn, $sqlComment);
if ($resComment)  {
  $allComment = $resComment->fetch_all();
}


 ?>

  <form method="POST" action="includes/insertComment.php">
    <input type="hidden" name="article_id" value="<?php echo $article_id; ?>">
    <label for="content">Comment</label>
    <textarea class="form-control" name="content" rows="10"></textarea>
    <div class="row">
      <div class="col-md-6">
        <label for="name">Name:</label>
        <input class="form-control" type="text" name="name" placeholder="Required">
      </div>
      <div class="col-md-6">
        <label for="name">Email: <small>(Will not be displayed)</small></label>
        <input class="form-control" type="email" name="email" placeholder="Required">
      </div>
    </div>
    <div class="g-recaptcha" data-sitekey="6Lf1NisUAAAAAB3y2zAPjumCRv_AtdU18SX-5mJv"></div>
    <button class="btn btn-primary" name="submit" type="submit" value="1">Submit</button>

  </form>

 <?php

 foreach($allComment as $comment) {
   echo "          <div class='col-md-12 comment'>
                    <p>" . $comment[1] . "</p>
                    <hr>
                    <h5 class='text-right'>By: " . $comment[2] . "</h5>
                    <h5 class='text-right'>Date: " . date('M d, Y', strtotime($comment[4])) . "</h6>
                   </div>";
 }
 mysqli_close($conn);
 ?>
