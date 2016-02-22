<?php
namespace PocketKiller\ShootingRod;


use pocketmine\scheduler\PluginTask;
use pocketmine\Player;

class Cooldown extends PluginTask {

    public function __construct(Main $plugin, Player $player) {
        parent::__construct($plugin);
        $this->plugin = $plugin;
        $this->player = $player;
    }

    public function onRun($tick) {
        unset($this->plugin->disallowed[$this->player->getId()]);
        $this->plugin->getServer()->getScheduler()->cancelTask($this->getTaskId());
    }
}
