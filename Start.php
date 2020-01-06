<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/grid.css">
  <meta charset="utf-8">
  <title>Välkommen till Bike Problems</title>

</head>

<body>

  <button onclick="topFunction()" id="myBtn" title="Toppen">Top</button>
  <div class="container">

    <img src="img/logo.png" id="logo" alt="">

    <div class="topnav" id="myTopnav">

      <a class="active" href="Start.php">Hem</a>
      <a href="Artikel.php">Artiklar</a>
      <a href="Kontakt.php">Kontakt</a>
      <a href="OmOss.php">Om Oss</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction2()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <img src="img/reklam.jpg" id="reklam" alt="">
    <img src="img/monkey.png" id="reklam2" alt="">


    <div id="notepad">
      <b>
        <font>Välkommen Till Bike Problems!</font>
      </b>
      <br><br>
      <font size="5">Sidan där du hittar allt om hur man fixar sin cykel</font>
      <br>
      <img id="mekaniker" src="img/mekaniker.jpeg" alt="">

    </div>


    <div id="searchbox">

      <?php include 'index.php';?>




    </div>
</div>
    <img src="img/reklam3.jpeg" id="reklam3" alt="">

    <footer>

      Hemsidan är skapad av Jonathan Fransén
    </footer>
  


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
  <div class="winter-is-coming">
    <div class="snow snow--near"></div>
    <div class="snow snow--near snow--alt"></div>

    <div class="snow snow--mid"></div>
    <div class="snow snow--mid snow--alt"></div>

    <div class="snow snow--far"></div>
    <div class="snow snow--far snow--alt"></div>
  </div>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
