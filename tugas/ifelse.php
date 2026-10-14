<?php
$nilai = 85;
// Menyimpan nilai yang akan diperiksa oleh percabangan.

if ($nilai >= 90) {
    // Memilih cabang ini jika nilai minimal 90.
    echo "Nilai A";
    // Menampilkan hasil untuk nilai pada cabang A.
} elseif ($nilai >= 75) {
    // Memilih cabang ini jika nilai di bawah 90 tetapi minimal 75.
    echo "Nilai B";
    // Menampilkan hasil untuk nilai pada cabang B.
} elseif ($nilai >= 60) {
    // Memilih cabang ini jika nilai di bawah 75 tetapi minimal 60.
    echo "Nilai C";
    // Menampilkan hasil untuk nilai pada cabang C.
} else {
    // Memilih cabang ini jika semua kondisi sebelumnya tidak terpenuhi.
    echo "Nilai E";
    // Menampilkan nilai E untuk nilai di bawah 60.
}
// Mengakhiri rangkaian percabangan if-elseif-else.
// Dengan nilai 85, program menampilkan "Nilai B".
?>
//if-elseif-else adalah percabangan yang memeriksa beberapa kondisi secara berurutan. Program akan mengeksekusi blok kode dari kondisi pertama yang terpenuhi dan mengabaikan kondisi lainnya. Jika tidak ada kondisi yang terpenuhi, blok else akan dijalankan sebagai default.