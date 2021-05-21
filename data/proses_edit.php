<?php
include "config.php";
    $id = $_POST['id'];
    $nobuku   = $_POST['nobuku_plat'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $nik = $_POST['nik'];    
    $nohp_pemohon    = $_POST['nohp_pemohon'];
    $nama_jenazah     = $_POST['nama_jenazah'];
    $usia_jenazah    = $_POST['usia_jenazah'];
    $lokasi_makam    = $_POST['lokasi_makam'];
    $ijin_akhir    = $_POST['ijin_berlaku'];
    $biaya    = $_POST['biaya'];
    $status_bayar    = $_POST['status_bayar'];
    $metode_pembayaran    = $_POST['metode_pembayaran'];


$query  = "UPDATE `data_ijin_makam` SET `NIK`='$nik',`nohp_pemohon`='$nama_pemohon',`status_bayar`='AKAN MEMBAYAR',`metode_pembayaran`='$metode_pembayaran' WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Jika pilihan Anda membayar tunai, harus diselesaikan per hari ini');window.location='../pencarian.php';</script>";
    }