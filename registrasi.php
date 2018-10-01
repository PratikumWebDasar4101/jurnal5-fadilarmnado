<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrasi</title>
  </head>
  <body>
    <form action="progresregis.php" method="post">
      <center>
      <h1>Pendaftaran</h1>
      NIM : <input type="text" name="nim" maxlength="10" pattern="\d*" >
      Nama : <input type="text" name="nama" maxlength="25" required>
      Email : <input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com"><br><br>
      <input type="submit" name="submit" value="Registrasi">
    </center>
    </form>
  </body>
</html>
