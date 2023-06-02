<?php

$namaPanggilan = "Yodhim";
$tanggalHariIni = date("j");

if (strlen($namaPanggilan) == ($tanggalHariIni - 2)) {
    echo "Berhasil";
} elseif (strlen($namaPanggilan) < $tanggalHariIni) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}

echo "\n\n";

$anggotaKelompok = [
    ["nama" => "Yodhimas Geffananda", "nim" => "494737"],
    ["nama" => "Muhammad Rizky Aziz", "nim" => "497318"],
    ["nama" => "Bima Bayu Sofana", "nim" => "502556"],
    ["nama" => "Rasyid Kusnady", "nim" => "499123"],
    ["nama" => "Muhammad Hanif Sauqi", "nim" => "494838"]
];

foreach ($anggotaKelompok as $anggota) {
    $nama = $anggota["nama"];
    $nim = $anggota["nim"];
    $peran = ($nim % 2 == 0) ? "Back-end Developer" : "Front-end Developer";
    echo "Nama: $nama, NIM: $nim, Peran: $peran\n";
}

echo "\n";

$kotaKKN = [
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
];

$namaDepan = str_split($namaPanggilan);
$tujuanKKN = "Jawa Timur"; 

foreach ($namaDepan as $huruf) {
    foreach ($kotaKKN as $kota) {
        if (strtolower(substr($kota, 0, 1)) === strtolower($huruf)) {
            $tujuanKKN = $kota;
            break 2;
        }
    }
}

echo "Nama: $namaPanggilan\n";
echo "Tujuan KKN: $tujuanKKN\n";

?>