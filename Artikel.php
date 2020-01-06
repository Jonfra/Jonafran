<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/grid.css">
  <script type="text/javascript" src="js/script.js"></script>
  <meta charset="utf-8">
  <title>Artiklar</title>
</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Toppen">Top</button>
  <div class="container">

    <img src="img/logo.png" id="logo" alt="">

    <div class="topnav" id="myTopnav">

      <a href="Start.php">Hem</a>
      <a class="active" href="Artikel.php">Artiklar</a>
      <a href="Kontakt.php">Kontakt</a>
      <a href="OmOss.php">Om Oss</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction2()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <img src="img/reklam.jpg" id="reklam" alt="">
    <img src="img/monkey.png" id="reklam2" alt="">


    <div id="notepad">
      <font size="7">Våra artiklar</font>
      <br></br><br></br>

      <img src="img/broms.jpeg" alt="">
      <br></br>
      <a id="broms" href="http://bikeproblems.epizy.com/Form/article.php?title=Justera%20din%20broms&date=2017-11-25%2012:23:11">Bromsar</a>
      <br></br>

      <img src="img/vaxel.jpeg" id="vaxelimg" alt="">
      <br></br>
      <a id="växel" href="http://bikeproblems.epizy.com/Form/article.php?title=Fixa%20din%20vaxel&date=2017-11-25%2012:23:11">Växlar</a>

    </div>

    <div id="searchbox">

        <?php include 'index.php';?>
    </div>
</div>
    <img src="img/reklam3.jpeg" id="reklam3" alt="">

    <footer>

      Hemsidan är skapad av Jonathan Fransén
    </footer>
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
</body>
