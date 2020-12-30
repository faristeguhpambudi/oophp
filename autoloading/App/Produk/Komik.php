<?php 

class Komik extends Produk implements InfoProduk {
	public $jmlhalaman;

	public function __construct($judul, $penulis, $penerbit,$harga, $jmlhalaman) {
		parent::__construct($judul, $penulis, $penerbit,$harga);
		$this->jmlhalaman = $jmlhalaman;
	}

	public function getInfo(){
		//Komik: Naruto | Masashi,  narutoclub (Rp. 600000). - 100 Halaman.
		//Game: Pes | David Grey,  konami (Rp. 650000). - 10 Jam.

		$string = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}).";
		return $string;
	}

	public function getInfoProduk() {
		$string = "Komik: ". $this->getInfo() ." - {$this->jmlhalaman} - Halaman";
		return $string;
	}
}
