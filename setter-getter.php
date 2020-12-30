<?php 

//JUALAN PRODUK
//KOMIK
//game
class Produk {
	private $judul,
			$penulis,
			$penerbit,
			$diskon=0,
			$harga;

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

	public function getJudul()
	{
		return $this->judul;
	}

	public function setJudul($judul)
	{
		if(!is_string($judul)){
			throw new Exception('yang anda masukkan bukan string');
		}
		$this->judul = $judul;
	}

	public function getPenulis()
	{
		return $this->penulis;
	}

	public function setPenulis($penulis)
	{
		if(!is_string($penulis)){
			throw new Exception('yang anda masukkan bukan string');
		}
		$this->penulis = $penulis;
	}

	public function getPenerbit()
	{
		return $this->penerbit;
	}

	public function setPenerbit($penerbit)
	{
		if(!is_string($penerbit)){
			throw new Exception('yang anda masukkan bukan string');
		}
		$this->penerbit = $penerbit;
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;
	}

	public function getDiskon()
	{
		return $this->diskon;
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
echo "<hr>";
$produk2->setDiskon(10);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setJudul("baru jdul");
echo $produk1->getPenulis();