<?php

// echo "Hello World"; //output, cls untuk membersihkan terminal
// echo PHP_EOL; //enter (mirip endl)
// echo 'nama saya uu';

// echo PHP_EOL;
// $nama = readline("Masukkan Nama Anda : "); //inputan
// echo "Selamat Datang $nama"; //menampilkan inputan

//VARIABEL (dalam php tidak diperlukan tipe data, hanya memberikan nilai pada variabel dan wajib diberi nilai)
//dinamic type -> di mana tipe data ditentukan saat pemberian nilai awal (assigt) langsung pada variabel
// $angka = 5;
// echo $angka;
// echo PHP_EOL;

// var_dump($angka); //untuk mengecek sebuah tipe data pada sebuah variabel dan mengecek apakah variabel tersebut berapa dan apa nilainya
// echo PHP_EOL;
// $angka = "lima";
// var_dump($angka);

// //konstanta
// //disarankan menggunakan huruf besar untuk membedakan dengan variabel lain
// define("APP_VERSION", 1.1);
// echo "Versi Aplikasi".APP_VERSION; //. berfungsi sama seperti + di java

//$angka = 10;
// if(isset($angka)){ //isset digunakan untuk mengecek keberadaan suatu variabel apakah variabel tersebut sudah diberi nilai apa belum
//     echo $angka;
// } else{
//     echo "Angka tidak ada nilainya";
// }

// echo isset($angka) ? "Bernilai" : "Tidak bernilai"; //cara kedua menggunakan if dengan ? (ternary)
// echo PHP_EOL;
// echo "Isinya : ". $angka;

// unset($angka); //unset berfungsi untuk meniadakan (menghapus) keberadaan suatu variabel
// echo "Isinya : ". $angka;

//echo $angka ?? "Tidak ada isinya"; //Null Coalescing Operator (??) -> mengecek sebuah variabel, jika bernilai null 
//akan menampilkan statement, jika tidak bernilai null maka akan menampilkan isi/nilai dari variabel

// $a = 5;
// $b = "5";
// echo ($a === $b); //== membandingkan nilai, === membandingkan nilai dengan tipe datanya

//cara 1 if
$a = 5;
if($a > 0){
    echo "positif";
} else{
    echo "negatif";
}

echo PHP_EOL;
//cara 2 if menggunakan :
if($a > 0):
    echo "positif";
else:
    echo "negatif";
endif;

echo PHP_EOL;

for($i = 1; $i <= 5; $i++):
    echo $i;
endfor;

echo PHP_EOL;
//tidak mengembalikkan nilai
function sayHello(){
    echo "Hallo";
}
sayHello();
    
echo PHP_EOL;
function showNumber($number){
    return $number;
}
$hasil = showNumber(12);
echo "Tampil Angka ".$hasil;
    
echo PHP_EOL;
//function tanpa nama (anonymous function)
$result = function($bilangan){
    echo "bilangan ".$bilangan;
};
echo $result(25);

echo PHP_EOL;
$buah = array('apel', 'jeruk', 'anggur');
echo $buah[2];

echo PHP_EOL;
$data = [1, 2, 3, 4, 5, 6, 7, 8];
for($i = 0; $i < count($data); $i++){
    echo $data[$i];
}
    
echo PHP_EOL;
foreach($buah as $data){
    echo $data;
}

//array asosiatif -> array yang index nya di modifikasi sendiri
echo PHP_EOL;
$barang = array(
        "kode_barang" => "001",
        "nama_barang" => "penggaris",
        "harga" => 2500,
        "stok" => 27
);
var_dump($barang);
print_r($barang);
