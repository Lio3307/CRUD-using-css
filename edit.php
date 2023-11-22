<?php
include_once("koneksi.php");

// Pastikan $idmotor telah didefinisikan
$idmotor = $_GET['id'];

if (isset($_POST["update"])) {
    $idmotor = $_POST["idmotor"];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    // Variabel untuk mengelola upload gambar
    $upload_dir = "upload/"; // Direktori tempat menyimpan gambar

    if (!empty($_FILES['foto']['name'])) {
        $upload_file = $upload_dir . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $upload_file);
        $result = mysqli_query($mysqli, "UPDATE MOTOR SET MERK='$merk', HARGA='$harga', FOTO='$upload_file' WHERE IDMOTOR=$idmotor");
    } else {
        // Jika tidak ada file gambar yang diunggah, hanya update data lain
        $result = mysqli_query($mysqli, "UPDATE MOTOR SET MERK='$merk', HARGA='$harga' WHERE IDMOTOR=$idmotor");
    }

    header("Location: index.php");
}

// Ambil data motor dari database
$result = mysqli_query($mysqli, "SELECT * FROM MOTOR WHERE IDMOTOR=$idmotor");
$harga_motor = mysqli_fetch_array($result);

// Ambil nilai merk dan harga dari data motor
$merk = $harga_motor['MERK'];
$harga = $harga_motor['HARGA'];
$foto = $harga_motor['FOTO'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="edit.css" />
    <title>Edit/Update</title>
  </head>
  <body>
      <a href="admin.php" style="text-decoration: none"><button class="back">BACK TO HOME</button></a><br />
    <form
      action="edit.php?id=<?php echo $idmotor; ?>"
      name="edit_motor"
      method="post"
      enctype="multipart/form-data"
    >
      <div class="container">
        <div class="card">
          <label>MERK</label><br />
          <input type="text" name="merk" value="<?php echo $merk; ?>" required /><br />

          <label>HARGA</label><br />
          <input type="text" name="harga" value="<?php echo $harga; ?>" required /><br />

          <!-- Input untuk mengunggah gambar -->
          <label>Foto</label><br />
          <input type="file" name="foto" /><br />

          <!-- Menampilkan gambar yang ada di database -->
          <img src="<?php echo $foto; ?>" alt="Foto Motor" width="200" />

          <input type="hidden" name="idmotor" value="<?php echo $idmotor; ?>" />
          <input type="submit" name="update" value="UPDATE" />
        </div>
      </div>
    </form>
  </body>
</html>
