<?php include 'header.php';

$conn = get_connected();
$article_id = $_GET['article_id'];
$sql = 'SELECT * from articles where id =' . $article_id;
$results = mysqli_query($conn, $sql);
$all = $results->fetch_assoc();
//print_r($all);
$author_id = $all['Author_id'];
$qry = 'SELECT * from authors where id =' . $author_id;
$res = mysqli_query($conn, $qry);
$allAuthor = $res->fetch_assoc();

?>
<section class="container">
  <div class="col-md-10 wrapper">
    <div class="row">
      <div class="infoPod">
        <form method="POST" action="updateArticle.php">
          <div class="col-md-12 form-group">
            <input type="hidden" name="article_id" value="<?php print($article_id); ?>">
            <label class="" for="title">Article Title</label>
            <input class="form-control" type="text" name="title" value="<?php print($all['Title']); ?>">
          </div>
          <div class="col-md-12 form-group">
            <label class="" for="title">Subtitle</label>
            <input class="form-control" type="text" name="stitle" value="<?php print($all['Stitle']); ?>">
          </div>
          <div class="col-md-6 form-group">
            <label class="" for="author">Author</label>
            <input class="form-control" type="text" name="author" value="<?php print_r($allAuthor['First_name'] . " " . $allAuthor['Last_name']); ?>">
          </div>
          <div class="col-md-6 form-group">
            <label class="" for="subject">Subject</label>
            <input class="form-control" type="text" name="subject" value="<?php print($all['Subject']); ?>">
          </div>
          <div class="col-md-12 form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" rows="50" name="content" id="content" value=""><?php print($all['Content']); ?></textarea>
          </div>
          <div class="col-md-9">
          </div>
          <div class="col-md-3 form-group">
            <button class="btn btn-success pull-right">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
