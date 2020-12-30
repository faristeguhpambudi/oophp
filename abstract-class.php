<?php 

//JUALAN PRODUK
//KOMIK
//game
abstract class Produk {
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

	abstract public function getInfoProduk();

	public function getInfo(){
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
		$string = "Komik: ". parent::getInfo() ." - {$this->jmlhalaman} - Halaman";
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
		$string = "Game: ". parent::getInfo() ." - {$this->waktumain}- Waktu Main";
		return $string;
	}

}

class CetakInfoProduk{
	public $daftarProduk = [];


	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak()
	{
		$string = "Daftar Produk : <br>";
		foreach ($this->daftarProduk as $dp) {
			$string .= "- {$dp->getInfoProduk()} <br>";
		}
		return $string;
	}
}

$produk1 = new Komik("naruto", "jepang", "jepangcompany", 60000, 100);
$produk2 = new Game("PES", "company", "KOnami", "500000", 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

