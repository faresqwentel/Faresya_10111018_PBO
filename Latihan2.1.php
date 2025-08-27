<?php

class Guru {
    var $nama_nama = array("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $Jabatan;
    var $alamat;
}

class Murid {
    var $Nama_siswa;
    var $NIS;
    var $Kelas;
    var $alamat;
}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil {
    var $jumlahRoda=4;
    var $warna="Merah";
    var $bahanBakar="Pertamax";
    var $harga=120000000;
    var $merek='A';

    public function statusHarga() {
        if ($this->harga > 500000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$objekBMW = new Mobil;
$objekTesla = new Mobil;
$objekAudi = new Mobil;

// --- TAMBAHKAN BAGIAN INI UNTUK MELIHAT OUTPUT ---

// 1. Menampilkan hasil dari method statusHarga() untuk objek BMW
echo "Status harga BMW: " . $objekBMW->statusHarga(); // Ini akan mencetak 'Murah'
echo "<br>"; // Pindah baris di browser

// 2. Menampilkan nilai dari properti 'warna' untuk objek Tesla
echo "Warna mobil Tesla: " . $objekTesla->warna; // Ini akan mencetak 'Merah'
echo "<br>";

// 3. Menampilkan status harga mobil Audi
echo "Status harga Audi: " . $objekAudi->statusHarga(); // Ini juga akan mencetak 'Murah'

?>