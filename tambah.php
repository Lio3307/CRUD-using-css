<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="tambah.css" />
    <title>Tambah Data</title>
  </head>
  <body>
    <a href="index.php" style="text-decoration: none"
      ><button class="back">Kembali ke Home</button></a
    ><br />
    <form
      action="tambah.php"
      method="post"
      name="form1"
      enctype="multipart/form-data"
    >
      <div class="container">
        <div class="card">
          <label>MERK</label>
          <input type="text" name="merk" required /><br />

          <label>HARGA</label>
          <input type="text" name="harga" required /><br />

          <!-- Input untuk mengunggah gambar -->
          <label>Foto</label>
          <input type="file" name="foto" required /><br />

          <input type="submit" name="submit" value="TAMBAH" />
        </div>
      </div>
    </form>
    <?php
if (isset($_POST["submit"])) {
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    // Pengaturan untuk mengelola upload gambar
    $upload_dir = "upload/"; // Direktori tempat menyimpan gambar
    $upload_file = $upload_dir . basename($_FILES['foto']['name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], $upload_file);

    include_once("koneksi.php");

    $result = mysqli_query($mysqli, "INSERT INTO MOTOR (MERK, HARGA, FOTO) VALUES ('$merk', '$harga', '$upload_file')");

    if($result){
      ?>
      <script>
        swal({
  title: "Berhasil!",
  text: "Data telah ditambahkan!",
  icon: "success",
});
      </script>
      <?php
    }
}
?>
  </body>
</html>
