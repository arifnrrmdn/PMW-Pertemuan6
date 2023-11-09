<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formSatuProses</title>
</head>
<body>
    <form action="" method="POST" name="input">
        Nama Anda : <input type="text" name="nama">
    </form>

    <?php
        $nama = "" ;
        $nama =  isset($_POST['nama']) ? $_POST['nama'] : '';
        $nama = !empty($_POST['nama']) ? $_POST['nama'] : '';
        
        echo" Nama anda : <b> $nama </b>";
    ?>

    </body>
</html>


<!-- Perbedaan POST & GET -->
<!-- POST gk bakal nampilin inputan di URL
GET bakal nampilin inputan di URL -->