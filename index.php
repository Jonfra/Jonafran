
<?php
include 'header.php';

 ?>
<h1>Sök efter artikel</h1>

<form action="search.php" method="POST">
  <input type="text" name="search" placeholder="Search">
  <button type="submit" name="submit-search">search</button>
</form>




<div class="article-container">
  <?php
$sql = "SELECT * FROM article";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);
if ($queryResults > 0){
while ($row = mysqli_fetch_assoc($result)) {

  }
}

   ?>

</body>
</html>
