<?php
include 'header.php';

$errNum = $_GET['error'];
if ($errNum == '1') {
  $error = "**Please fill in a Company or Organization";
} elseif ($errNum =='2')  {
  $error = "**Please fill in a Contact Name";
} elseif ($errNum =='3')  {
  $error = "**We cannot get back to you without an Email address.";
} else if ($errNum =='4')  {
  $error = "**You appear to be a robot.";
}

?>
<section class="container">
  <div class="col-md-12 wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="infoPod">
              <p class="error"><?php echo $error ?></p>
              <form method="POST" action="mailRequest.php">
                <div class="form-group row">
                  <div class="col-md-12">
                    <div class="col-sm-12">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="**Required">
                    </div>
                    <div class="col-sm-12">
                      <label for"email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="**Required">
                    </div>
                    <div class="col-sm-12">
                      <label for"contact">Subject</label>
                      <input type="text" class="form-control" name="subject" placeholder="**Required">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="col-sm-12">
                      <label for="body">Body</label>
                      <textarea class="form-control" rows="4" name="body"></textarea>
                    </div>
                    <div class="col-sm-4">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                  </div>

                </div>
                <div class="g-recaptcha" data-sitekey="6Lf1NisUAAAAAB3y2zAPjumCRv_AtdU18SX-5mJv"></div>
              </form>
            </div>
          </div>
          <?php include 'sidebar.php'; ?>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>
