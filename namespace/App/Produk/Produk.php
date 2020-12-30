<?php 

Abstract class Produk {
	protected $judul,
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

	abstract function getInfo();

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
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