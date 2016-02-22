<?php
namespace PocketKiller\ShootingRod;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerFishEvent;

class GenisysHack extends PluginBase implements Listener {

	public function onFish(PlayerFishEvent $event){
		if($event->getPlayer()->hasPermission("shootingrod.use")) $event->setCancelled(true);
	}
}