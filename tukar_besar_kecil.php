<?php
function tukar_besar_kecil($string){
//kode di sini
    $hasil = "";
    for ($a=0;$a<strlen($string); $a++){
        $nilai = $string[$a];

        if(ctype_alpha($nilai) && $nilai == strtolower($nilai)){
            $hasil .= strtoupper($nilai);  
        }else if (ctype_alpha($nilai) && $nilai == strtoupper($nilai)){
            $hasil .= strtolower($nilai); 
        } else {
            $hasil .= $string[$a];
        }
    }   
    return $hasil;
}


// TEST CASES
echo tukar_besar_kecil('Hello World') ."<br>"; // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY') . "<br>"; // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!') . "<br>"; // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me') . "<br>"; // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW') . "<br>"; // "001-a-3-5tRDyw"
?>
