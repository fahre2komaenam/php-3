<?php
function ubah_huruf($string){
//kode di sini
$huruf = "abcdefghijklmnopqrstuvwxyz";
$hasil = "";
for ($a=0; $a <strlen($string); $a++){
    $alph = strrpos($huruf, $string[$a]);
    $hasil .= substr($huruf,$alph+1,1);
  }
  return $hasil;
}

// TEST CASES
echo ubah_huruf('wow') . "<br>"; // xpx
echo ubah_huruf('developer') . "<br>"; // efwfmpqfs
echo ubah_huruf('laravel') . "<br>"; // mbsbwfm
echo ubah_huruf('keren') . "<br>"; // lfsfo
echo ubah_huruf('semangat') . "<br>"; // tfnbohbu
