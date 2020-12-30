<?php 

//JUALAN PRODUK
//KOMIK
//game
class Produk{
//PROPERTY
 public $judul = "judul",
		$penulis = "penulis",
		$penerbit = "penerbit",
		$harga = 0;

//METHOD
public function getLabel(){
	return "$this->penulis, $this->penerbit";
}
}


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masahi";
$produk3->penerbit = "Shonen";
$produk3->harga = 65000;

$produk4 = new Produk();
$produk4->judul = "Tsubasa";
$produk4->penulis = "Kasi";
$produk4->penerbit = "opea";
$produk4->harga = 70000;

echo "Komik : " . $produk3->getLabel();
echo "<hr>";
echo "Game : " . $produk4->getLabel();