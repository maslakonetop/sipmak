<?php
  $host = "localhost"; 
  $user = "u4840961_sipmak_admin";
  $pass = "m4sl4k0n3clp";
  $nama_db = "u4840961_sipmak"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>