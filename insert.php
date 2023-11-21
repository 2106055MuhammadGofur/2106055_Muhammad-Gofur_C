<?php
    
    include './koneksi.php';

    $nama = $_POST['namaPemesan'];
    $alamat = $_POST['alamat'];
    $noTelepon = $_POST['noTelepon'];
    $jenisBaju = $_POST['jenisBaju'];
    $ukuran = $_POST['ukuran'];
    $jumlahPesanan = $_POST['jumlahPesanan'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO pesan_baju VALUES (NULL, '$nama','$alamat','$noTelepon','$jenisBaju','$ukuran','$jumlahPesanan','$tanggal')";

    mysqli_query($db,$query);

    echo"<script> 
            alert('Data berhasil ditambahkan!')
        </script>";
        echo"<script> 
        window.location='./index.php'
    </script>";
    ?>