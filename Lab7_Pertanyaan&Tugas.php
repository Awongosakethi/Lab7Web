<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Pertanyaan Dan Tugas</h2>
    <form method="post">
            <label>Nama Lengkap: </label>
            <input type="text" name="nama">
            <br>
            <label>Tanggal Lahir..: </label>
            <input type="text" name="tgl_lahir">
            <br>
            <label>Posisi Kerja.....: 
            <select name='pekerjaan'>
                <option value='HRD'>HRD</option>
                <option value='Manager'>Manager</option>
                <option value='Operator'>Operator</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Cetak">
    </form>
    <?php
        echo 'Nama Lengkap: ' . $_POST['nama'];

        $tgl_lahir = @$_POST['tgl_lahir'];

        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime('2021/5/10');
        $y = $hari_ini->diff($lahir)->y;
        $m = $hari_ini->diff($lahir)->m;
        echo "<br> Usia Lengkap..: ". $y . "tahun" . $m ."bulan";

        echo "<br> Posisi Kerja.....: ". $_POST['pekerjaan'];

        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "HRD"){
            echo '<br> Gaji: Rp. 10.000.000,-';
        }elseif($pekerjaan == "Manager"){
            echo '<br> Gaji: Rp. 7.000.000,-';
        }elseif($pekerjaan == "Operator"){
            echo '<br> Gaji: Rp. 5.000.000,-';
        }
    ?>

</body>
</html>