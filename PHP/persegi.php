<?php

// laragon -> start ( web ) -> browser -> localhost

//  start -> tgu apche nyala baru buka browser -> localhost

// file Path _ Laragon ( C:/laragon/www )
// file Path_ Xampp ( C:/xampp/htdocs )

// bagaimana cara menjumlahkan variable dengan variable lain

// coba buat fungsi menghitung luas segitiga 

// buat class MobileLegend isinya ada fungsi retri, fungsi nambahHP($hp_awal, $hp_yang_ditambah)


// $angka1 = 30;
// $angka2 = 50;
// $hasil = $angka1 + $angka2;

// echo "Hasil dari $angka1 + dengan angka $angka2 = $hasil <br>";

// function segitiga($angka_pertama, $angka_kedua)
// {
//     // 1/2 (alas * tinggi)
//     // ** pangkat 

//     $hasil = ($angka_pertama * $angka_kedua) / 2;
//     return $hasil;
// }

// $fungsi_segitiga = segitiga($angka1, $angka2);

// echo "hasil dari segitga dengan alas $angka1 dengan tinggi $angka2  = $fungsi_segitiga";

// class MobileLegeds
// {
//     function retri()
//     {
//         echo "<br> temen saya makek retri INDOMARET";
//     }

//     function nambah_HP($hp_awal, $hp_yang_ditambah)
//     {
//         $pertambahan_HP = $hp_awal + $hp_yang_ditambah;
//         return $pertambahan_HP;
//     }
// }

// $ml = new MobileLegeds();

// $ml->retri();
// echo "<br> hp nya bertambah $angka1 + $angka2 = ";
// echo $ml->nambah_HP($angka1, $angka2);














// buat cara menghitung luas lingkaran ada percabangan disini, jika bukan kelipatan 7 pakai 3.14 jika kelipatan 7 pakai 22/7

// buatkan rumus menghitung luas lingkaran kedalam function dengan parameter 

// buat class RumusMatematika isinya ada function menghtung luas segitiga dan menghitung luas lingkaran


// (If, else)
// %
// $angka = 10;
// if ($angka % 7 == 0) {
//     $lingkaran = ($angka * 22) / 7;
//     echo "hasil dari lingkaran 22/7 = $lingkaran";
// } else {
//     $hasil = $angka * 3.14;
//     echo "angka ini menggunakan 3.14 = $hasil";
// }
// case closed

// function rumus_lingkaran($angka)
// {

//     if ($angka % 7 == 0) {
//         $lingkaran = ($angka * 22) / 7;
//         echo "hasil dari lingkaran 22/7 = $lingkaran";
//     } else {
//         $hasil = $angka * 3.14;
//         echo "angka ini menggunakan 3.14 = $hasil";
//     }
// }

// rumus_lingkaran(70);

class Rumus_matematika
{
    function rumus_lingkaran($angka)
    {

        if ($angka % 7 == 0) {
            $lingkaran = ($angka * 22) / 7;
            echo "hasil dari lingkaran 22/7 = $lingkaran";
        } else {
            $hasil = $angka * 3.14;
            echo "angka ini menggunakan 3.14 = $hasil";
        }
    }
}

$lingkaran = new Rumus_matematika();

$lingkaran->rumus_lingkaran(500);

// repo Buat ( Persegi ) upload repo masing - masing ( masukin repo di Spreadsheet ) 
// Tenggat Sabtu 