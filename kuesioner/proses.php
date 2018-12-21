<?php
include '../_config/config.php';

//iki

$text = $_POST['text'];

$data_user = $_SESSION['user'];


if (isset($_POST['tambah'])) {
$nama=trim(mysqli_real_escape_string($con,$_POST['nama']));
$produk=trim(mysqli_real_escape_string($con,$_POST['produk']));
$type=trim(mysqli_real_escape_string($con,$_POST['type']));
$alamat_kerja=trim(mysqli_real_escape_string($con,$_POST['alamat_kerja']));
$alamat_tinggal=trim(mysqli_real_escape_string($con,$_POST['alamat_tinggal']));
$telepon=trim(mysqli_real_escape_string($con,$_POST['telepon']));
$jkel=trim(mysqli_real_escape_string($con,$_POST['jkel']));
$usia=trim(mysqli_real_escape_string($con,$_POST['usia']));
$pekerjaan=trim(mysqli_real_escape_string($con,$_POST['pekerjaan']));
$pendidikan=trim(mysqli_real_escape_string($con,$_POST['pendidikan']));
$status=trim(mysqli_real_escape_string($con,$_POST['status']));
$penghasilan=trim(mysqli_real_escape_string($con,$_POST['penghasilan']));
$sumber=trim(mysqli_real_escape_string($con,$_POST['sumber']));
$tujuan=trim(mysqli_real_escape_string($con,$_POST['tujuan']));
$data = "INSERT INTO data_responden (`id_user`, `nama`, `produk_beli`, `type`, `alamat_kerja`, `alamat_tinggal`, `telepon`, `jekel`, `umur`, `pekerjaan`, `pendidikan`, `status`, `penghasilan`, `sumber_penghasilan`, `tujuan_beli`) VALUES ('".$data_user['id_user']."','".$nama."','".$produk."','".$type."','".$alamat_kerja."','".$alamat_tinggal."','".$telepon."','".$jkel."','".$usia."','".$pekerjaan."','".$pendidikan."','".$status."','".$penghasilan."','".$sumber."','".$tujuan."')";
mysqli_query($con, $data);
$id_responden = mysqli_insert_id($con);

foreach ($_POST['answers'] as $id_pertanyaan => $opsis) {
	
	foreach ($opsis as $id_opsi) {
		if (isset($text[$id_opsi])) {
			$isitext = $text[$id_opsi];
			$query = "INSERT INTO tb_hasil (id_responden, id_soal, id_opsi, detail_jawaban) VALUES ('".$id_responden."', '".$id_pertanyaan."', '".$id_opsi."', '$isitext')";
		}else{
			$query = "INSERT INTO tb_hasil (`id_responden`, `id_soal`, `id_opsi`) VALUES ('".$id_responden."', '".$id_pertanyaan."', '".$id_opsi."')";
		}
		mysqli_query($con, $query);
		
	}
}
$situs = $_POST['situs'];
$situsquery = "INSERT INTO tb_hasil (id_responden, id_soal, detail_jawaban) VALUES ('".$id_responden."', '13', '$situs')";
mysqli_query($con,$situsquery);
echo "<script>window.location='index.php';</script>"; 
}
die;


?>