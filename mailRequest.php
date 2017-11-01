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
//$date = date("Y-m-d");
$body = $_POST['body'];
$to = 'zackglaser@gmail.com';
$from = 'From: zack@tech4lawyers.com';
$sender = $_POST['email'];
$message = " raaaaaawr";

include 'header.php';
?>
<section class="container">
  <div class="col-md-12 wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="infoPod" id="results">

        <?php
        print($subject);
        if (mail('zackglaser@gmail.com', $subject, $body, $from)){
          echo "Thank you for contacting us. We will, hopefully, be able to answer you shortly.";
        }else {
          print_r(error_get_last()['message']);
          print("oh noooo");
        }



      //  print($success);




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
