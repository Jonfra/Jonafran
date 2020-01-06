<?php
include 'header.php';

 ?>
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
<h1>Artiklar:</h1>
      <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%'
            OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'>


        <div>
        <h3>".$row['a_title']."</h3>
        <p> Publicerad: ".$row['a_date']."</p>
        <p>Skriven av: ".$row['a_author']."</p>
        </div></a>";

      }


            }else{
              echo "Det fanns ingen artikel som matchade din sökning!";

            }

      }

       ?>
    </div>


    <div id="searchbox">

      <?php include 'index.php';?>




    </div>
</div>
    <img src="img/reklam3.jpeg" id="reklam3" alt="">

    <footer>

      Hemsidan är skapad av Jonathan Fransén
    </footer>
  
    <script type="text/javascript" src="js/script.js"></script>
