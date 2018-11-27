<?php 
	include '../../conf.php'; 
	include '../../conn.php';

$No = get('No');
$hapus = $koneksi->prepare("DELETE FROM blog WHERE `No` = '".$No."'"); $hapus->execute();
header("location:../../index.php?p=blog");

 ?>