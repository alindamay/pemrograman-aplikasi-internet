<?php

class Hewan
{
	private $jenis;

	public function setJenis($jenis)
	{
		$this->jenis = $jenis;
	}
	public function getJenis()
	{
		return $this->jenis;
	}
}

class Mamalia extends Hewan
{
	public function menyusui()
	{
		echo 'susu sapi';
	}
}

class Kambing extends Mamalia
{
}

$kambing = new Kambing();
$kambing->menyusui(); 
echo PHP_EOL;