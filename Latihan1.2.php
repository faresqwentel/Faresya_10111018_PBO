<?php

// 1. Define the class named 'Buku'
class Buku {
    // Declare the properties for the book
    public $judul;
    public $pengarang;
    public $penerbit;
    public $tahunTerbit;

    // A constructor method to initialize the properties when a new object is created
    public function __construct($judul, $pengarang, $penerbit, $tahunTerbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahunTerbit = $tahunTerbit;
    }

    // A method to get the book's full information
    public function getInfo() {
        return "Judul: {$this->judul}, Pengarang: {$this->pengarang}, Penerbit: {$this->penerbit}, Tahun: {$this->tahunTerbit}";
    }
}

// --- Example of how to use the class ---

// Create a new object (instance) of the Buku class
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 2005);

// Display the book's information using the getInfo() method
echo $buku1->getInfo();
// Output: Judul: Laskar Pelangi, Pengarang: Andrea Hirata, Penerbit: Bentang Pustaka, Tahun: 2005
?>