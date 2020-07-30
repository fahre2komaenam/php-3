<?php

function papan_catur($angka) {
    // tulis kode di sini
    $x = 1;
    while ($x <= $angka) {
        $y = 1;
        while ($y <= $angka) {
            if (($x + $y) % 2 > 0)
                echo "# ";
            else
                echo " #";
            $y++;
        }
        echo "<br>";
        $x++;
    }

}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/