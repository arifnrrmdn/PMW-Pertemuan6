<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN</title>
</head>
<body>
    <h1>========================================================================================</h1>
    <center><h1>DATA NILAI MAHASISWA</h1></center>
    <h1>========================================================================================</h1>
    
    <form name="input" method="POST" action="prosesLatihan1.php">
        <p><b>Masukan NIM  </b> : <input type="text" name="nim"></p>
        <p><b>Masukan Nama  </b>: <input type="text" name="nama"></p>
        <p><b>Nilai UTS </b>    : <input type="number" name="nilai_uts"></p>
        <p><b>Nilai UAS </b>    : <input type="number" name="nilai_uas"></p>
        <p><b>Nilai Tugas </b>    : <input type="number" name="nilai_tugas"></p>
        
        <input type="submit" name="input" value="Proses"> <input type="reset" name="reset" value="Reset">
        <h1>========================================================================================</h1>

    </form>
</body>
</html>