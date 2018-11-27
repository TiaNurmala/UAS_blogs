<?php 
include '../../conf.php'; 
include '../../conn.php';

$No = post('No'); 
$Judul = post('Judul'); 
$Konten = post('Konten');
$Penulis = post('Penulis');

$simpan = $koneksi->prepare("UPDATE blog 
	SET `Judul`='".$Judul."', `Konten`='".$Konten."',`Penulis`='".$Penulis." WHERE `No` ='".$No."'"); 

$simpan->execute();

header("location:../../index.php?p=blog");

 ?>