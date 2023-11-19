<?php
// Variabel menghitung luas persegi
$sisi = 6;
$luas = $sisi * $sisi;
echo "Nilai dari perhitungan luas persegi dengan sisi $sisi adalah: $luas <br>";

// Function menghitung luas persegi
function luas_persegi($sisi)
{
    $nilai = $sisi * $sisi;
    return $nilai;
}

$fungsi_luas_persegi = luas_persegi($sisi);
echo "Nilai dari perhitungan luas persegi dengan sisi $sisi menggunakan function adalah: $fungsi_luas_persegi <br>";

class luas_persegi
{
    function luas_persegi($sisi)
    {
        $nilai = $sisi * $sisi;
        return $nilai;
    }
}

$persegi = new luas_persegi;
echo "Nilai dari luas persegi dengan sisi 6 menggunakan class adahalah: ";
echo $persegi->luas_persegi($sisi);
?>
