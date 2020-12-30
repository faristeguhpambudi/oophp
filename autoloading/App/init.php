<?php 
//CARA LAMA
// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/CetakInfoProduk.php';

//CARA BARU
spl_autoload_register(function($class)
{
	require_once 'Produk/' . $class .'.php';
});