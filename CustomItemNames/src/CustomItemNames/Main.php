<?php


namespace CustomItemName;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\item/Item;


class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getserver()->getLogger()->info("CustomItemName enabled!")
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable(){
		$this->getserver()->getLogger()->info("CustomItemName disabled!")
	}
	
	public function onJoin (PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
		$player->sendMessage(TextFormat::GREEN . "Hello " . TextFormat::BLUE . $name);
		
		$player->getInventory()->addItem(Item::get(340, 0, 1));
		
		$custom = Item::get(340, 0, 1);
		$custom = $custom->setCustomName(TextFormat::GOLD . TextFormat::BOLD . "This is a costum name! You can change this in the config of this plugin!" );
		$player->getInventory()->addItem($customName);
	}
	
}