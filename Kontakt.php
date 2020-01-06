<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/grid.css">
  <meta charset="utf-8">
  <title>Kontakt</title>

</head>

<body>

  <button onclick="topFunction()" id="myBtn" title="Toppen">Top</button>
  <div class="container">

    <img src="img/logo.png" id="logo" alt="">

    <div class="topnav" id="myTopnav">

      <a href="Start.php">Hem</a>
      <a href="Artikel.php">Artiklar</a>
      <a class="active" href="Kontakt.php">Kontakt</a>
      <a href="OmOss.php">Om Oss</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction2()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <img src="img/reklam.jpg" id="reklam" alt="">
    <img src="img/monkey.png" id="reklam2" alt="">


    <div id="notepad">
      <h2>Kontakta oss genom formuläret nedan:</h2>
      <br>
      <p></p>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Ditt Namn"><br>
        <input type="text" name="mail" placeholder="Din e-mail"><br>
        <input type="text" name="subject" placeholder="Ämne"><br>
        <textarea name="message" placeholder="Meddelande"></textarea><br>
        <button type="submit" name="submit">Skicka</button>
      </form>

    </div>

    <div id="searchbox">
        <?php include 'index.php';?>

    </div>
</div>
    <img src="img/reklam3.jpeg" id="reklam3" alt="">

    <footer>
  </div>




  <div class='popup' id="popup">

    <div class='cnt223'>
      <h1>Important Notice</h1>
      <p>
        We were affected by the fire next door and will remain closed until further notice.
        <br>
        <br>
      </p>
      <a id="close" class="close">Close</a>
    </div>
  </div>

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
