<?php

interface HewanInterface
{
	public function getJenis();
}

interface MamaliaInterface
{
	public function menyusui();
}

abstract class Hewan
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

class Kambing extends Hewan implements HewanInterface, MamaliaInterface
{
	public function menyusui()
	{
		echo 'nyusu kambing';
	}
}

class Harimau extends Hewan implements HewanInterface, MamaliaInterface
{
	public function menyusui()
	{
		echo 'nyusu maung';
	}
}

class Singa extends Hewan implements HewanInterface, MamaliaInterface
{
	public function menyusui()
	{
		echo 'nyusu singa';
	}
}