<?php
//function define by user

//fungsi yang tidaa mengembaliakan nilai
function salam(){
    echo "hii awa..";
}
salam(); //cetakanya
echo"<br>";

function panggil($arg1){
    echo "apakabar $arg1";
}
panggil("awa"); //cetakanya
echo"<br>";

//fungsi yang mengembalikan nilai
function hasil ($a,$b){
    $c=$a*$b;
    return $c;
}
echo hasil(2,7); //angka yang dihitung
echo"<br>";

//buat fungsi umur
function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo umur(1999); //umur yang dihitung
?>