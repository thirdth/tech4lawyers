<!DOCTYPE html>
<?php
include_once 'includes/t4l_config.php';
?>
<!-- TODO: create README.md and documentation -->
<html>
  <head>
<!-- TODO: get favicon -->
<!-- TODO: add google analytics -->
    <meta name="description" content="Productivity | Efficiency | Security">
    <meta name="author" content="//zackglaser.com">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta charset="utf-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta id="theme-color" name="theme-color" content="#36f">
    <!--change to _blank if you want to open links in new window-->
    <base target="_self">

    <title>tech4lawyers</title>
<!--TODO: check on polyfil for other browsers -->
    <!--add bootstrap css-->
<!-- TODO: localize bootstap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--specialized css has to load after bootstrap's more general css-->
    <link rel="stylesheet" href="css/fonts/css/font-awesome.min.css"><!-- TODO: localize these fonts -->
    <link rel="stylesheet" href="css/style.css">
    <!-- reCAPTCHA from Google -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
<?php include_once 'includes/analyticstracking.php'; ?>
  <body>
    <!--collapsable navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="/">
          <p class="brand">T 4 L</p>
        </a>
        </div>
        <div class="collapse navbar-collapse col-md-7" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about.php">About</a></li>
            <li><a href="/services.php">Services</a></li>
            <li><a href="/articles.php">Articles</a></li>
						<li><a href="/contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-5 callout">
          <h3 class="text-right">Efficiency | Productivity | Security</h3>
        </div>
      </div>
    </nav>
