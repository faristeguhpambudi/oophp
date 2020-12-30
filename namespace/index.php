<?php

require 'App/init.php';
// $produk1 = new Komik("naruto", "jepang", "jepangcompany", 60000, 100);
// $produk2 = new Game("PES", "company", "KOnami", "500000", 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();
new App\Service\User();
echo "<br>";
new App\Produk\User();