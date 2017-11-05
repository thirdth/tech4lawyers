<?php
//TODO: add section redirecting user if there is no 'submit' in the POST variable
if (!$_POST['submit'])  {
  header("Location: contact.php");
}
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
$date = date("Y-m-d");
$body = $_POST['body'];
$to = 'zackglaser@gmail.com';
$from = 'From: zack@tech4lawyers.com';
$sender = $_POST['email'];
$message = " Message from: " . $name . "\r\n Email: " . $sender . "\r\n Date: " . $date . "\r\n Message: " . $body;

include 'includes/header.php';
?>
<section class="container">
  <div class="col-md-12 wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="infoPod" id="results">

        <?php
        if (mail('zackglaser@gmail.com', $subject, $message, $from, '-fzack@tech4lawyers.com')){
          echo "<div class='col-md-12 text-center'><h3>Your email was sent, thank you for your interest in Tech4Lawyers. We will get back to you as soon as we can.</h3></div>";
        }else {
          echo "An error has occurred, please try again.";
        }



      //  print($success);




        ?>
        </div>
      </div>
      <?php include 'includes/sidebar.php'; ?>
    </div>
  </div>
</section>
  <section class="col-md-12">
    <div class="col-md-12">

    </div>
  </section>
</main>

<?php include 'includes/footer.php';?>
