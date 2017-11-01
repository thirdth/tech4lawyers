<?php

if ($_POST['name'] == '')  {
  header("Location: contact.php?error=1");
  die();
}
if ($_POST['subject'] == '')  {
  header("Location: contact.php?error=2");
  die();
}
if ($_POST['email'] == '')  {
  header("Location: contact.php?error=3");
  die();
}

if(isset($_POST['g-recaptcha-response'])) {
  $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
  header("Location: contact.php?&error=6");
  die();
}

$name = $_POST['name'];
$subject = $_POST['subject'];
$date = date(Y-m-d);
$body = $_POST['body'];
$to = 'zackglaser@gmail.com';
$from = 'From:' . $_POST['email'];
$message = " Name: " . $name . "\r\n Date: " . $date . "\r\n Body: " . $body;
include 'header.php';
?>
<section class="container">
  <div class="col-md-12 wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="infoPod" id="results">
        <?php    if (mail ($to , $subject , $message, $from )) {
                  echo "<div class='col-md-12 text-center'><h3>Your message has been sent.</h3></div>";
                }else {
                  echo "<div class='col-md-12 text-center'>Something went wrong. Please send your request again. If you continue to have trouble, please contact our office directly1.</div>";
                }



        ?>
        </div>
      </div>
      <?php include 'sidebar.php'; ?>
    </div>
  </div>
</section>
  <section class="col-md-12">
    <div class="col-md-12">

    </div>
  </section>
</main>

<?php include 'footer.php';?>
