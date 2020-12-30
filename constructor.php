<?php 

//JUALAN PRODUK
//KOMIK
//game
class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga;


	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

}

$produk1 = new Produk ("naruto", "masahi", "Shonen", 56000);
$produk2 = new Produk ("Tsubasa", "Kasei", "Maswd", 80000);

echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();