
<?php

function cari_mean($arr){
$bil_urut=$arr;
asort($bil_urut);
$i = 0;
    while(list($indeks,$arr[$i])=each($bil_urut))
    {
        $i=$i+1;
    }

$tengah=(count($arr)-1)/2;
    if ((count($arr)-1)>1)
    {
        if ((count($arr)-1)%2==0)
        {
            $median=($arr[$tengah-1]+$arr[$tengah])/2;
        }
        else
        {
            $median=$arr[$tengah];
        }
    }
    else
    {
    $median= "";
    }
    return $median;
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]) . "<br>"; // 3
echo cari_mean([3, 5, 7, 5, 3]) . "<br>"; // 5
echo cari_mean([6, 5, 4, 7, 3]) . "<br>"; // 5
echo cari_mean([1, 3, 3]) . "<br>"; // 2
echo cari_mean([7, 7, 7, 7, 7]) . "<br>"; // 7

?>
