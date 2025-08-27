<?php

class Kendaraan {
    // Properti (menggunakan 'public' untuk syntax modern)
    public $jumlahRoda;
    public $warna;
    public $bahanBakar;
    public $harga = 350000000; // Nilai default
    public $merek;
    public $status;
    public $tahunPembuatan; // Properti ditambahkan agar bisa diakses

    // Method untuk menentukan status harga
    public function statusHarga() {
        if ($this->harga > 50000000) {
            $this->status = "Mahal";
        } else {
            $this->status = "Murah";
        }
        return $this->status;
    }

    // FUNGSI BARU (tidak ada di kode asli, ditambahkan agar tidak error)
    // Method untuk menentukan apakah dapat subsidi berdasarkan bahan bakar
    public function dapatSubsidi() {
        if ($this->bahanBakar == "Pertalite") {
            return "Dapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }
    public function hargaSecondKendaraan() {
        $tahunSekarang = date("Y"); // Mengambil tahun saat ini
        $umurKendaraan = $tahunSekarang - $this->tahunPembuatan;
        
        // Asumsi harga turun 8% setiap tahun
        $hargaBekas = $this->harga * pow(0.92, $umurKendaraan);
        
        return number_format($hargaBekas, 0, ',', '.');
    }
}

$objekKendaraan1 = new Kendaraan();

$objekKendaraan1->harga = 10000000;
$objekKendaraan1->tahunPembuatan = 1999;
echo "Status Harga : " . $objekKendaraan1->statusHarga();


echo "<br><br>"; // Memberi jarak antar objek



$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: Rp " . $objekKendaraan2->hargaSecondKendaraan();

?>