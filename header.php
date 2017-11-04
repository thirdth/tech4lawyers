<!DOCTYPE html>
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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NPT3VTP');</script>
    <!-- End Google Tag Manager -->
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
<?php
include_once 'analyticstracking.php';
include 't4l_config.php';
?>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPT3VTP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
