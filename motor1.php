<?php

require_once 'motor.php';
$motor =new motor ('yamaha','mio','125cc','10.000.000');
echo "merk.. ".$motor->get_merk()."<br>";
echo "tipe.. ".$motor->get_tipe()."<br>";
echo "kecepatan.. ".$motor->get_kecepatan()."<br>";
echo "harga.. ".$motor->get_harga()."<br>";

  ?>