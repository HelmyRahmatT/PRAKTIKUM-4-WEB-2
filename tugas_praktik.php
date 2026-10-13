<?php
class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon; // dalam persen

    public function __construct($kode, $nama, $harga, $stok, $diskon) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }

    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    public function hitungHargaDiskon() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function tampilkanData() {
        echo "<h3>Data Produk</h3>";
        echo "Kode: " . $this->kode . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Diskon: " . $this->diskon . "%<br>";
        echo "Harga Setelah Diskon: Rp " . number_format($this->hitungHargaDiskon(), 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Nilai Stok: Rp " . number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";
    }
}

$produk1 = new Produk("P001", "Laptop", 7000000, 10, 10);
$produk2 = new Produk("P002", "Mouse", 150000, 25, 5);

$produk1->tampilkanData();
echo "<hr>";
$produk2->tampilkanData();
?>