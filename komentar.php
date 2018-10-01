<?php
  
  if (isset($_POST['submit'])) {
    $komen = $_POST['komentar'];
    if (strlen($komen) < 5) {
      echo "komentar kurang dari 5 kata";
    }else {
      echo "jumlah kata pada komentar :"." ".strlen($komen);
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Komentar</title>
  </head>
  <body>
    <form action="komentar.php" method="post">
      <h1>Komentar</h1>
      Komentar: <br><textarea name="komentar" rows="9" cols="50"></textarea><br><br>
      <input type="submit" name="submit" value="kirim">
    </form>
  </body>
</html>
