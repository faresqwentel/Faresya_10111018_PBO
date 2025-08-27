<?php
class Mobil{
    var $jumlahRoda=6;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    public function getJumlahRoda(){
    return $this->jumlahRoda;
    }   
    public function statusharga(){

    }
    
}

$object1 = new Mobil();
$object2 = new Mobil();

echo $object1->getJumlahRoda();

?>