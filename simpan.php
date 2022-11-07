<?php
include_once("koneksi.php");

$nama=$_POST['nama'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$pesan=$_POST['pesan'];
$tanggal=date("Y-m-d H:i:s");

$sql="insert into datakontak(nama,email,subjek,pesan,tanggal) values('$nama','$email','$subjek','$pesan','$tanggal')";

mysqli_query($koneksi,$sql) or die (mysqli_error());
echo '<script>alert("your message was sent successfully."); document.location="contact.php";</script>';
