<?php 
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