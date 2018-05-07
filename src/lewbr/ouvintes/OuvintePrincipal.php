<?php

namespace lewbr\ouvintes;

use pocketmine\event\Listener;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\player\PlayerJoinEvent;

use lewbr\Loader;

class OuvintePrincipal implements Listener
{
	
	protected $plugin;
	
	public function __construct(Loader $plugin)
	{
		$this->plugin = $plugin;
		$plugin->getServer()->getPluginManager()->registerEvents($this, $plugin);
	}
	
	public function retPlugin()
	{
		return $this->plugin;
	}
	
	public function emMudarMundo(EntityLevelChangeEvent $evento)
	{
		
		$entidade = $evento->getEntity();
			
		
		
	}
	
	public function emEntrar(PlayerJoinEvent $evento)
	{
		
		#TODO
		
	}
	
}