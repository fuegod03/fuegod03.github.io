<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">

    <!-- CSS library -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="library/lightbox2-master/dist/css/lightbox.css">
    <link rel="stylesheet" href="library/animista.css">
       <!-- Scroll reveal -->
       <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- JS View Port position -->
    <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>
    <script src="https://unpkg.com/scrollama"></script>

   <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- NAV BAR -->
<nav id="navbar-example2" class="navbar navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="#">Logo</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link link2 resume" href="Resume/Jose-Espino-resume.pdf" download>Resume</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#fat">Portfolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#skills">Skills</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#about">About me</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">one</a>
        <a class="dropdown-item" href="#two">two</a>
        <a class="dropdown-item" href="#three">three</a>
        <a class="dropdown-item" href="#four">four</a>
      </div>
    </li>
  </ul>
</nav>
</head>
  <body>
<div class="col-fluid" id="PHP-contact">

<img src="https://cdn.dribbble.com/users/1162077/screenshots/5365852/segments-shot_2x.png
" alt="">

<div class="content">
  <?php

  // configure
  $from = 'Demo contact form <info@joseespino.com>';
  $sendTo = 'Demo contact form <jcdeveloper3@gmail.com>';
  $subject = 'New message from -joseespino.com-';
  $fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in email
  $okMessage = 'Thank you, I will get back to you soon!';
  $errorMessage = 'There was an error while submitting the form. Please try again later';

  // let's do the sending

  try
  {
      $emailText = "You have new message from contact form\n=============================\n";

      foreach ($_POST as $key => $value) {

          if (isset($fields[$key])) {
              $emailText .= "$fields[$key]: $value\n";
          }
      }

      mail($sendTo, $subject, $emailText, "From: " . $from);

      $responseArray = array('type' => 'success', 'message' => $okMessage);
  }
  catch (\Exception $e)
  {
      $responseArray = array('type' => 'danger', 'message' => $errorMessage);
  }

  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $encoded = json_encode($responseArray);

      header('Content-Type: application/json');

      echo $encoded;
  }
  else {
      echo $responseArray['message'];
  }
?>
</div>
</div>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="app.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
<!-- CSS library -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="library/lightbox2-master/dist/js/lightbox.js" charset="utf-8"></script>
<!-- Scroll reveal -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Smooth Scrolling -->
<script src="library/smooth-scroll-1.2/smooth-scroll.js" charset="utf-8"></script>
<!-- Contact Form -->
<script src="contact.js"></script>
  </body>
</html>
