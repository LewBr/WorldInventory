<?php

namespace lewbr\provedores;

use lewbr\Loader;

abstract class ProvedorPrincipal implements Provedor
{
	protected $plugin;
	
	public function __construct(Loader $plugin) {
		$this->plugin = $plugin;
		$this->nisso();
	}
	
	protected abstract function nisso();
	
	public function retPlugin() {
		return $this->plugin;
	}
}