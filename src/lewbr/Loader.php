<?php

namespace lewbr;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

use lewbr\provedores\yaml\ProvedorYAML;
use lewbr\ouvintes\OuvintePrincipal;

class Loader extends PluginBase
{
	
	private $configu;
	protected $provedor;
	protected $ouvinte;
	const ARQUIVO_DE_CONFIG = "config.yml";
	
		public function onEnable()
		{
			$this->carregar_configs();
			$this->carregar_fornecedor();
			$this->carregar_ouvinte();
		}
	
		private function carregar_configs()
		{
			$this->saveResource(self::ARQUIVO_DE_CONFIG);
			$this->configu = new Config($this->getDataFolder() . self::ARQUIVO_DE_CONFIG, Config::YAML);
		}
	
		public function retConfig()
		{
			return $this->configu;
		}
	
		public function carregar_fornecedor()
		{
			switch(strtolower($this->retConfig()->getNested("provedor"))) 
			{
				case "yaml":
					$this->provedor = new ProvedorYAML($this);
				break;
				default:
					$this->provedor = new ProvedorYAML($this);
					break;
			}
		}
	
		public function carregar_ouvinte() 
		{
			$this->ouvinte = new OuvintePrincipal($this);
		}
	
		
}