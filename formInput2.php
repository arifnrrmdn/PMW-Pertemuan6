<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penangan form Input</title>
</head>
<body>
    <form name="input" method="POST" action="proses2.php">
        <p><b>Nama </b> : <input type="text" name="nama"></p>
        <p><b>Email </b> : <input type="text" name="email"></p>

        <!-- Radio Button -->
        <p><b>Jenis Kelamin : </b>
        <input name="gender" type="radio" value="L"> Laki-Laki
        <input name="gender" type="radio" value="P"> Perempuan
        </p>

        <!-- Combo Box -->
        <p><b>Umur : </b>
        <select name="umur">
            <option value=""><center>Pilih</center></option>
            <option value="0-29">Kurang dari 30</option>
            <option value="30-60">30 - 60</option>
            <option value="6++">60 Keatas</option>
        </select>
        </p>

        <!-- Text Area -->
        <p><b>Komentar : </b>
        <textarea name="komentar"cols="30" rows="4"></textarea>
        </p>

        <input type="submit" name="input" value="Kirim">
    </form>
</body>
</html>