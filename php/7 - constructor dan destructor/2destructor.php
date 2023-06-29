<?php

class Connection
{
	public function __destruct()
	{
		echo 'Object dihapus dari memory';
	}
}

$connection = new Connection(); unset($connection);