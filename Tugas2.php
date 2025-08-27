<?php
class Toko {
    public $pinjaman = 1000000;
    public $persen_bunga = 10;
    public $lama_angsuran = 5;
    public $terlambat_hari = 40;
    public $persen_denda = 0.15;
    
    public function __construct($pinjamanduit, $bunga, $angsuran, $terlambat) {
        $this->pinjaman = $pinjamanduit;
        $this->persen_bunga = $bunga;
        $this->lama_angsuran = $angsuran;
        $this->terlambat_hari = $terlambat;
    }
    
    public function get_pinjamandana() {
        $bunga_rupiah = $this->pinjaman * ($this->persen_bunga/100);
        return $this->pinjaman + $bunga_rupiah;
    }
    
    public function getAngsuran() {
        return $this->get_pinjamandana() / $this->lama_angsuran;
    }
    
    // --- BAGIAN YANG DIPERBAIKI ---
    public function getTerlambat() {
        // DIUBAH: Denda sekarang dihitung dari angsuran bulanan, bukan total pinjaman
        $besaran_angsuran = $this->getAngsuran(); 
        return $besaran_angsuran * ($this->persen_denda / 100) * $this->terlambat_hari;
    }
    
    public function totalpembayaran() {
        return $this->getAngsuran() + $this->getTerlambat();
    }
    
    public function tampilkan() {
        $angsuran = $this->getAngsuran();
        $denda = $this->getTerlambat();
        $totalBayar = $this->totalpembayaran();

        echo "Besaran Angsuran Bulanan: Rp " . number_format($angsuran) . "<br>";
        echo "Denda Keterlambatan: Rp " . number_format($denda) . "<br>";
        echo "<b>Total Pembayaran Bulan Ini: Rp " . number_format($totalBayar) . "</b><br>";
    }
}

// Membuat objek baru dari class Toko
$transaksi = new Toko(1000000, 10, 5, 40);

// Memanggil method untuk menampilkan output
$transaksi->tampilkan();

?>