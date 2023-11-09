<?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $umur = $_POST['umur'];
    $komentar = $_POST['komentar'];

    echo"TERIMA KASIH ATAS KOMENTAR ANDA <br>
        Nama          : $nama <br>
        Email         : $email <br>
        Jenis Kelamin : $gender <br>
        Umur          : $umur <br>
        Komentar      : $komentar<br>
    ";
?>