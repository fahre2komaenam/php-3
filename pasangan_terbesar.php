<?php
function pasangan_terbesar($angka){
// kode di sini
$max = substr($angka, 0,2);
for ($a=0; $a<=strlen($angka)-2; $a++){
    $angka2 = substr($angka,$a,2);
    if ($angka2 > $max){
        $max = $angka2;
    }
  }
    return $max;
}

// TEST CASES
echo pasangan_terbesar(641573) . "<br>"; // 73
echo pasangan_terbesar(12783456) . "<br>"; // 83
echo pasangan_terbesar(910233) . "<br>"; // 91
echo pasangan_terbesar(71856421) . "<br>"; // 85
echo pasangan_terbesar(79918293) . "<br>"; // 99 
