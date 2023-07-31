<?php

namespace ShxdowFxr\AShop;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Server;
use ShxdowFxr\AShop\listener\AbilityListener;
use ShxdowFxr\AShop\commands\AbilityCommand;
use pocketmine\utils\SingletonTrait;


class Loader extends PluginBase{
    
    /** @var Loader */
    protected static $instance;
    
    public function onLoad() : void {
        self::$instance = $this;
    }
   public function onEnable(): void
    {
        $this->saveResource("config.yml");
        $this->getServer()->getPluginManager()->registerEvents(new AbilityListener($this), $this);
       $this->getServer()->getCommandMap()->register("ability", new AbilityCommand($this));
    }
   public static function getInstance(): Loader {
       return self::$instance;
   }

}
