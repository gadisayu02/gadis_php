<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //constanta
    define('gajiPokok',5000000);
    define('bonus',500000);
    define('pajak',0.12);

echo "Nama : Gadis ayu andika <br>";
echo "absen : 02 <br><br>";
echo " perhitungan gaji karyawan <br><br>";

define("BONUS", 500000);
define("GAJI", 5000000);
define("PAJAK", 0.12);

$jumlahperproyek = 3;
$totalpendapatan = GAJI + (BONUS * $jumlahperproyek);
$totalbersih = $totalpendapatan - ($totalpendapatan * PAJAK);

echo "gaji yang anda dapat Rp. " . number_format(GAJI,0,',',',') ."<br>";
echo "gaji yang anda dapat setelah di tambah dengan bonus project dengan nilai Rp. " .number_format(BONUS,0,',',',') ."
adalah sebesar Rp. " . number_format($totalpendapatan,0,',',',') . "<br>";
echo "gaji bersih anda sebesar Rp. ". number_format($totalbersih,0, ',',',');




    ?>
</body>
</html>
