<?php
include "config.php";
// membaca data dari form
$id = $_POST['id'];
$nobuku_plat = $_POST['nobuku_plat'];
$nama_pemohon = $_POST['nama_pemohon'];
$alamat_pemohon = $_POST['alamat_pemohon'];
$nama_jenazah = $_POST['nama_jenazah'];
$lahir = $_POST['lahir'];
$wafat = $_POST['wafat'];
$usia_jenazah = $_POST['usia_jenazah'];
$lokasi_makam = $_POST['lokasi_makam'];
$ijin_berlaku = $_POST['ijin_berlaku'];
$ijin_akhir = $_POST['ijin_akhir'];
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("Surat Ijin Pemakaman.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#nobuku_plat", $nobuku_plat, $document);
$document = str_replace("#nama_pemohon", $nama_pemohon, $document);
$document = str_replace("#alamat_pemohon", $alamat_pemohon, $document);
$document = str_replace("#nama_jenazah", $nama_jenazah, $document);
$document = str_replace("#lahir", $lahir, $document);
$document = str_replace("#wafat", $wafat, $document);
$document = str_replace("#usia_jenazah", $usia_jenazah, $document);
$document = str_replace("#lokasi_makam", $lokasi_makam, $document);
$document = str_replace("#ijin_berlaku", $ijin_berlaku, $document);
$document = str_replace("#ijin_akhir", $ijin_akhir, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Surat Ijin Pemakaman.doc");
header("Content-length: ".strlen($document));
echo $document;
?>