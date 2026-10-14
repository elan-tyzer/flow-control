<?php
for ($i = 1; $i <= 10; $i++) {
    // Mengulang nilai $i dari 1 sampai 10, bertambah 1 pada setiap putaran.
    if ($i % 2 == 0) continue;
    // Melewati putaran ini jika $i genap agar hanya bilangan ganjil yang diproses.
    if ($i == 7) break;
    // Menghentikan perulangan saat $i bernilai 7.
    echo "$i ";
    // Menampilkan bilangan ganjil sebelum 7, yaitu 1, 3, dan 5.
}
?>