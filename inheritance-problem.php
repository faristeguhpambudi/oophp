<?php 

//JUALAN PRODUK
//KOMIK
//game
class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;

	public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",$harga="harga",$jmlHalaman = 0, $waktuMain = 0, $tipe="produk"){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		//Komik : Naruto | Masashi, Shonen, (Rp 70000) - 100 Hlm.
		$string = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp {$this->harga})";
		if ($this->tipe == "Komik")
		{
			$string .= " - {$this->jmlHalaman} hlm.";
		} else if($this->tipe == "Game")
		{
			$string .= " ~ {$this->waktuMain} jam.";
		}

		return $string;
	}

}

class CetakInfoProduk{
	public function cetak(Produk $produk){
		$string = "{$produk->judul} | {$produk->getLabel()}, Rp. {$produk->harga}";
		return $string;
	}
}


$produk1 = new Produk("naruto", "jepang", "jepangcompany", 60000,100,0, "Komik");
$produk2 = new Produk("PES", "company", "KOnami", "500000",0,50, "Game");


//Komik : Naruto | Masashi, Shonen, (Rp 70000) - 100 Hlm.
//Game : PES | Company, Pess, (Rp 80000) ~ 80 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
