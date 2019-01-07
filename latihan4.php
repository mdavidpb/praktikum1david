<?php
  $nama = "Firdausa";
  $kelas = "XIRPL2";
  function tampil_nama(){
          global $nama;
          echo "Nama Saya : ".$nama;
          echo "<br>";
        }
function tampil_kelas(){
          global $kelas;
          echo "Kelas Saya : ".$kelas;
  }
  tampil_nama();
  tampil_kelas();
?>
