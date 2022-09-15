<?php
	function CetakNilai($angka)
{
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "TigaLima\n";
    } elseif ($angka % 3 == 0) {
        echo "Tiga\n";
    } elseif ($angka % 5 == 0) {
        echo "Lima\n";
    } else {
        echo $angka . "\n";
    }
}

for ($i = 1; $i <= 100; $i++) { 
    CetakNilai($i);
}
?>
