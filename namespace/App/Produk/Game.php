<?php 

class Game extends Produk implements InfoProduk{
	public $waktumain;

	public function __construct($judul, $penulis, $penerbit,$harga, $waktumain) {
		parent::__construct($judul, $penulis, $penerbit,$harga);
		$this->waktumain = $waktumain;
	}

	public function getInfo(){
		//Komik: Naruto | Masashi,  narutoclub (Rp. 600000). - 100 Halaman.
		//Game: Pes | David Grey,  konami (Rp. 650000). - 10 Jam.

		$string = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}).";
		return $string;
	}


	public function getInfoProduk() {
		$string = "Game: ". $this->getInfo() ." - {$this->waktumain}- Waktu Main";
		return $string;
	}

}