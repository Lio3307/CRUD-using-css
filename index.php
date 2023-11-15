<?php
include_once("koneksi.php");

if (isset($_POST["submit"])) {
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    // Pengaturan untuk mengelola upload gambar
    $upload_dir = "upload/"; // Direktori tempat menyimpan gambar
    $upload_file = $upload_dir . basename($_FILES['foto']['name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], $upload_file);

    $result = mysqli_query($mysqli, "INSERT INTO MOTOR (MERK, HARGA, FOTO) VALUES ('$merk', '$harga', '$upload_file')");
}

$result = mysqli_query($mysqli, "SELECT * FROM MOTOR");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Motor</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <a href="tambah.php" style="text-decoration: none;"><button class="btn-tmbh" >Tambah Data</button><br></a>

      <div class="container">
      <?php
      while($harga_motor = mysqli_fetch_array($result)){
        echo "<div class='card'>";
        echo "<img src=".$harga_motor["FOTO"].">";
        echo "<h6><b>".$harga_motor["IDMOTOR"]."</b></h6>";
        echo "<h4>".$harga_motor["HARGA"]."</h4>";
        echo "<h5>".$harga_motor["MERK"]."</h5>";
        echo '<a style="color: white;" href="edit.php?id=' . $harga_motor["IDMOTOR"] . '"><button class="btn-edit">EDIT</button></a> | <a style="color: white;" href="delete.php?id=' . $harga_motor["IDMOTOR"] . '"><button class="btn-del">DELETE</button></a>';
        echo "</div>";
      }
      ?>
      </div>
  </body>
</html>