<?php
class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $kuliah='STTNF';
    public function getHasil() {
       if ($this->nilai > 55 ) return 'Lulus';
       else return 'Gak Lulus';
    }

}

$ns1 = new NilaiSiswa();
$ns1->nama = 'awa';
$ns1->nilai = 80;

echo $ns1->nama;
echo $ns1->nilai;
echo $ns1->kuliah;
echo $ns1->getHasil();
?>