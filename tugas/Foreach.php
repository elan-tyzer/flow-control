<?php
$buah = ["Apel", "Mangga", "Jeruk"];
// Membuat daftar buah yang akan diproses satu per satu.

foreach ($buah as $item) {
    // Mengambil setiap buah dari daftar dan menyimpannya sementara di $item.
    echo "$item <br>";
    // Menampilkan nama buah, lalu berpindah ke baris baru pada halaman.
}

// Dengan key => value
$nilai = ["Matematika" => 90, "IPA" => 85];
// Membuat daftar nilai dengan nama mata pelajaran sebagai kunci dan angka sebagai nilai.
foreach ($nilai as $mapel => $skor) {
    // Mengambil nama mata pelajaran ke $mapel dan nilainya ke $skor pada setiap putaran.
    echo "$mapel: $skor <br>";
    // Menampilkan nama mata pelajaran beserta nilainya, lalu membuat baris baru.
}
?>