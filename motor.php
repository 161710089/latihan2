<?php
class motor {
public $merk;
public $tipe;
public $kecepatan;
public $harga;

public function __construct($merk,$tipe,$kecepatan,$harga)
{
$this->merk =$merk;
$this->tipe =$tipe;
$this->kecepatan =$kecepatan;
$this->harga =$harga;
}


public function get_merk()
{
	return $this->merk;
}



public function get_tipe()
{
	return $this->tipe;
}

public function get_kecepatan()
{
	return $this->kecepatan;
}

public function get_harga()
{
	return $this->harga;
}


}
  ?>
