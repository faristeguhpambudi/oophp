<?php 

//JUALAN PRODUK
//KOMIK
//game
class Produk {
	public $judul,
			$penulis,
			$penerbit;
	protected $diskon=0;
	private $harga;

	public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",$harga=0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk()
	{
		//Komik: Naruto | Masashi,  narutoclub (Rp. 600000). - 100 Halaman.
		//Game: Pes | David Grey,  konami (Rp. 650000). - 10 Jam.

		$string = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}).";
		return $string;
	}

	public function getHarga()
	{
		return $this->harga - ($this->harga*$this->diskon/100);
	}

}

class Komik extends Produk{
	public $jmlhalaman;

	public function __construct($judul, $penulis, $penerbit,$harga, $jmlhalaman) {
		parent::__construct($judul, $penulis, $penerbit,$harga);
		$this->jmlhalaman = $jmlhalaman;
	}
	public function getInfoProduk() {
		$string = "Komik: ". parent::getInfoProduk() ." - {$this->jmlhalaman} - Halaman";
		return $string;
	}
}

class Game extends Produk{
	public $waktumain;

	public function __construct($judul, $penulis, $penerbit,$harga, $waktumain) {
		parent::__construct($judul, $penulis, $penerbit,$harga);
		$this->waktumain = $waktumain;
	}
	public function getInfoProduk() {
		$string = "Game: ". parent::getInfoProduk() ." - {$this->waktumain}- Waktu Main";
		return $string;
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;
	}
}

class CetakInfoProduk{
	public function cetak(Produk $produk)
	{
		$string = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $string;
	}
}

$produk1 = new Komik("naruto", "jepang", "jepangcompany", 60000, 100);
$produk2 = new Game("PES", "company", "KOnami", "500000", 50);

//Komik: Naruto | Masashi,  narutoclub (Rp. 600000). - 100 Halaman.
//Game: Pes | David Grey,  konami (Rp. 650000). - 10 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

$produk2->setDiskon(10);
echo $produk2->getHarga();