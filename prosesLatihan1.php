<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_akhir = ($nilai_uts*30/100) + ($nilai_uas*40/100) + ($nilai_tugas*30/100);

    if($nilai_akhir >= 85 && $nilai_akhir <=100){
        $index_nilai = 'A';
    }elseif($nilai_akhir >= 70 && $nilai_akhir <= 84){
        $index_nilai = 'B';
    }elseif($nilai_akhir >= 60 && $nilai_akhir <= 69){
        $index_nilai = 'C';
    }elseif($nilai_akhir >= 40 && $nilai_akhir <= 59){
        $index_nilai = 'D';
    }elseif($nilai_akhir <= 39){
        $index_nilai = 'E';
    }

    echo"
    NIM         : $nim<br>
    Nama        : $nama<br>
    Nilai UTS   : $nilai_uts<br>
    Nilai UAS   : $nilai_uas<br>
    Nilai Tugas : $nilai_tugas<br>
    Nilai Akhir : $nilai_akhir<br>
    Index Nilai : $index_nilai<br>
    ";

?>