<?php

class Mobil
{
	private $roda = 4;

	protected function roda()
	{
		return $this->roda + 2;
	}

	public function getRoda()
	{
		return $this->roda();
	}
}