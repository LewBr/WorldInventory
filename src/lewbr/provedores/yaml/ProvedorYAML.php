<?php

namespace lewbr\provedores\yaml;

use lewbr\provedores\ProvedorPrincipal;
use pocketmine\Player;

class ProvedorYAML extends ProvedorPrincipal
{
	
	public function nisso()
	{
		$this->carregarArq();
	}
	
	public function carregarArq()
	{
		@mkdir($this->retPlugin()->getDataFolder()."YAML/", 0777, true);
	}
	
}