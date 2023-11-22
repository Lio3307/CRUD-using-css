<?php

include_once("koneksi.php");

$idmotor = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM MOTOR WHERE IDMOTOR=$idmotor");
header("Location:admin.php");

?>