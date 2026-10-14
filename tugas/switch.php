<?php

date_default_timezone_set('Asia/Jakarta');

$hari = date('l');
//untuk l itu hari dan Y dan m itu tahun dan bulan.
echo "Hari ini adalah $hari. ";
switch ($hari) {
    case 'Monday':
        echo "Mulai kerja!";
        break;
    case 'Friday':
        echo "Hari terakhir kerja!";
        break;
    case 'Saturday':
    case 'Sunday':
        echo "Libur!";
        break;
    default:
        echo "Hari kerja";
}
?>
//switch itu nilai yang sudah pastikan, jika tidak ada yang cocok maka akan masuk ke default.
//default itu nilai yang tidak terpenuhi.