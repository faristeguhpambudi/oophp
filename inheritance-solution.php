<?php 

//JUALAN PRODUK
//KOMIK
//game
class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlhalaman,
			$waktumain;

	public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",$harga="harga", $jmlhalaman = 0, $waktumain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk()
	{
		//Komik: Naruto | Masashi,  narutoclub (Rp. 600000). - 100 Halaman.
		//Game: Pes | David Grey,  konami (Rp. 650000). - 10 Jam.

		$string = "{$this->tipe}: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}).";
		return $string;
	}

}

class Komik extends Produk{
	public function getInfoProduk() {
		$string = "Komik: ". parent::getInfoProduk() ." - {$this->jmlhalaman} - Halaman";
		return $string;
	}
}

class Game extends Produk{
	public function getInfoProduk() {
		$string = "Game: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}). ~ {$this->waktumain} - Waktu Main";
		return $string;
	}
}

class CetakInfoProduk{
	public function cetak(Produk $produk)
	{
		$string = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $string;
	}
}

$produk1 = new Komik("naruto", "jepang", "jepangcompany", 60000, 100, 0);
$produk2 = new Game("PES", "company", "KOnami", "500000", 0, 50);

//Komik: Naruto | Masashi,  narutoclub (Rp. 600000). - 100 Halaman.
//Game: Pes | David Grey,  konami (Rp. 650000). - 10 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();