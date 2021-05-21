<?php
include "config.php";
    $nobuku = $_POST['nobuku_plat'];
    $nama_pemohon   = $_POST['nama_pemohon'];
    $alamat_pemohon     = $_POST['alamat_pemohon'];
    $nohp_pemohon    = $_POST['nohp_pemohon'];
    $nama_jenazah = $_POST['nama_jenazah'];
    $tgl_lhr_jnz    = $_POST['tgl_lhr_jnz'];
    $tgl_wft_jnz    = $_POST['tgl_wft_jnz'];
    $usia_jenazah    = $_POST['usia_jenazah'];
    $lokasi_makam    = $_POST['lokasi_makam'];
    $ijin_berlaku    = $_POST['ijin_berlaku'];
    $ijin_akhir    = $_POST['ijin_akhir'];
    $biaya    = $_POST['biaya'];
    $status_bayar    = $_POST['status_bayar'];
    $keterangan    = $_POST['keterangan'];
    $status_ijin    = $_POST['status_ijin'];

$query  = "INSERT INTO data_ijin_makam(nobuku_plat, nama_pemohon, alamat_pemohon, nohp_pemohon, nama_jenazah, tgl_lhr_jnz, tgl_wft_jnz, usia_jenazah, lokasi_makam, ijin_berlaku, ijin_akhir, biaya, status_bayar, keterangan, status_ijin) 
VALUES ('$nobuku','$nama_pemohon','$alamat_pemohon','$nohp_pemohon','$nama_jenazah','$tgl_lhr_jnz','$tgl_wft_jnz','$usia_jenazah','$lokasi_makam','$ijin_berlaku','$ijin_akhir','$biaya','$status_bayar','$keterangan','$status_ijin')";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Mohon diingat nomer plat Anda');window.location='../bayar.php?nobuku=$nobuku';</script>";
    }