<?php 

//JUALAN PRODUK
//KOMIK
//game
class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",$harga="harga"){
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

class CetakInfoProduk{
	public function cetak(Produk $produk){
		$string = "{$produk->judul} | {$produk->getLabel()}, Rp. {$produk->harga}";
		return $string;
	}
}


$produk1 = new Produk("naruto", "jepang", "jepangcompany", 60000);
$produk2 = new Produk("PES", "company", "KOnami", "500000");


echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);