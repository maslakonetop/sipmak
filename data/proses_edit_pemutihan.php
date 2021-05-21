<?php
include "config.php";
    $id_pelanggan = $_POST['id'];
    $nobuku   = $_POST['nobuku_plat'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $nik = $_POST['nik'];    
    $nohp_pemohon    = $_POST['nohp_pemohon'];
    $nama_jenazah     = $_POST['nama_jenazah'];
    $usia_jenazah    = $_POST['usia_jenazah'];
    $lokasi_makam    = $_POST['lokasi_makam'];
    $ijin_berlaku    = $_POST['ijin_berlaku'];
    $ijin_akhir =$_POST['ijin_akhir'];
    $biaya    = $_POST['biaya'];
    $status_bayar    = $_POST['status_bayar'];
    $metode_pembayaran    = $_POST['metode_pembayaran'];


$query  = "UPDATE `data_ijin_makam` SET `NIK`='$nik',
`nohp_pemohon`='$nohp_pemohon',
`ijin_akhir`='$ijin_akhir',
`status_bayar`='AKAN MEMBAYAR',
`status_ijin`='PEMUTIHAN',
`metode_pembayaran`='$metode_pembayaran' 
WHERE id ='$id_pelanggan'";


$result =  mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Jika pilihan Anda membayar tunai, harus diselesaikan per hari ini <br> Silahkan mendatangi Kantor Disperkimta');window.location='../index.php';</script>";
    }
?>