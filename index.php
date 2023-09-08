<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="">Nama Lengkap</label>
        <input type="text" name="nama"><br>

        <label for="">TTL</label>
        <input type="date" name="ttl"><br>

        <label for="">Alamat</label>
        <textarea name="alamat" cols="30" rows="10"></textarea><br>

        <label for="">No Telpon</label>
        <input type="text" name="no_telpon"><br>

        <label for="">Jenis kelamin</label>
        <input type="radio" name="jk" value="laki-laki">Laki laki
        <input type="radio" name="jk" value="perempuan">Perempuan
        <br>


        <label for="">Agama</label>
        <select id="cars" name="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="budha">Budha</option>
            <option value="khatolik">Khatolik</option>
        </select><br>

        <label for="">Hobi</label>
        <input type="text" name="hobi"><br>

        <button type="submit">Tampilkan</button>
        <button type="reset">Reset</button>
    </form><br>
    <?php
    $nama = @$_POST['nama'];
    $ttl = @$_POST['ttl'];
    $alamat = @$_POST['alamat'];
    $no_telpon = @$_POST['no_telpon'];
    $jk = @$_POST['jk'];
    $agama = @$_POST['agama'];
    $hobi = @$_POST['hobi'];


    ?>

    <div>
        <p>Nama Lengkap : <?= $nama; ?></p>
        <p>Tempat Tanggal Lahir : <?= $ttl; ?></p>
        <p>Alamat : <?= $alamat; ?></p>
        <p>No Telpon : <?= $no_telpon; ?></p>
        <p>Jenis Kelamin : <?= $jk; ?></p>
        <p>Agama : <?= $agama; ?></p>
        <p>Hobi : <?= $hobi; ?></p>
    </div>


</body>

</html>