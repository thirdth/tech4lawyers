<?php include 'includes/header.php'; ?>
<section class="container">
  <div class="col-md-12 wrapper">
    <div class="row">
      <div class="infoPod">
        <form method="POST" action="insertArticle.php">
          <div class="col-md-12 form-group">
            <label class="" for="title">Article Title</label>
            <input class="form-control" type="text" name="title">
          </div>
          <div class="col-md-12 form-group">
            <label class="" for="title">Subtitle</label>
            <input class="form-control" type="text" name="title" value="<?php print($all['Title']); ?>">
          </div>
          <div class="col-md-6 form-group">
            <label class="" for="author">Author</label>
            <input class="form-control" type="text" name="author">
          </div>
          <div class="col-md-6 form-group">
            <label class="" for="subject">Subject</label>
            <input class="form-control" type="text" name="subject">
          </div>
          <div class="col-md-12 form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" rows="50" name="content" id="content"></textarea>
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
<?php include 'includes/footer.php'; ?>
