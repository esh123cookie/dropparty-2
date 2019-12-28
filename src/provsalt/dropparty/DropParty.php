<?php

namespace provsalt\dropparty;

use pocketmine\plugin\PluginBase;
use provsalt\dropparty\task\DropItemsTask;
use provsalt\dropparty\task\DropPartyTask;
use pocketmine\utils\Config;
use pocketmine\scheduler\TaskScheduler;

class DropParty extends PluginBase {
	
	public $secs = 0;
	public $tasks = [];
	public $status;
	public $time;
	
	public function onEnable() {
		$this->cfg = (new Config($this->getDataFolder() . "config.yml", Config::YAML)->getAll();
		
		$this->time = $this->cfg["Time"];
		$this->getScheduler()->scheduleRepeatingTask(new task\DropPartyTask($this), 20 * 60);
		$this->getScheduler()->scheduleRepeatingTask(new task\DropItemsTask($this), 20);
	}
	
	public function config() {
	  return $this->cfg;
	}
	
	public function getDropPartyTask() {
	  return new DropPartyTask($this);
	}
	
	public function getDropItemsTask() {
	  return new DropItemsTask($this);
	}
	
	public function getRandomItem() {
	  $rand = mt_rand(0, count($this->cfg["Items"]) - 1);
		
	  return $this->cfg["Items"][$rand];
		
	}
	
}
