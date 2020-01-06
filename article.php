
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
       <?php

       $title = $search = mysqli_real_escape_string($conn, $_GET['title']);
       $date = $search = mysqli_real_escape_string($conn, $_GET['date']);


     $sql = "SELECT * FROM article WHERE a_title='$title' AND a_date='$date'";
     $result = mysqli_query($conn, $sql);
     $queryResults = mysqli_num_rows($result);
     if ($queryResults > 0){
     while ($row = mysqli_fetch_assoc($result))


      {


       echo "<div>
     <h3>".$row['a_title']."</h3>
     <p>".$row['a_text']."</p>
     <img src='".$row['a_img']."'>
     <p>".$row['a_date']."</p>
     <p>".$row['a_author']."</p>
       </div>";

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
   </div>

   <script type="text/javascript" src="js/script.js"></script>
