<?php
$a = 10;
// Menyimpan angka pertama yang akan dihitung.
$b = 5;
// Menyimpan angka kedua yang akan dihitung.
$operator = '+';
// Menentukan operasi yang dipakai; bisa diganti dengan +, -, *, /, atau %.

switch ($operator) {
    // Memeriksa nilai operator lalu menjalankan cabang yang cocok.
    case '+': $hasil = $a + $b; break;
    // Jika operator +, jumlahkan angka pertama dan kedua, lalu hentikan switch.
    case '-': $hasil = $a - $b; break;
    // Jika operator -, kurangkan angka kedua dari angka pertama, lalu hentikan switch.
    case '*': $hasil = $a * $b; break;
    // Jika operator *, kalikan kedua angka, lalu hentikan switch.
    case '/': $hasil = $a / $b; break;
    // Jika operator /, bagi angka pertama dengan angka kedua, lalu hentikan switch.
    case '%': $hasil = $a % $b; break;
    // Jika operator %, simpan sisa pembagian kedua angka, lalu hentikan switch.
    default: $hasil = "Operator tidak dikenal";
    // Jika operator tidak cocok dengan pilihan di atas, simpan pesan kesalahan.
}

echo "$a $operator $b = $hasil";
// Menampilkan perhitungan lengkap beserta hasil yang disimpan di $hasil.
?>