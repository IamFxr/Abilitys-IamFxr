<?php

namespace ShxdowFxr\AShop\commands;

use pocketmine\command\Command;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\item\VanillaItems;
use ShxdowFxr\AShop\utils\FormUtils;


class AbilityCommand extends Command{
   
   public function __construct(){
      parent::__construct("ability", "abilitys shop command by IamFxr.lol", "/c", ["abilityshop"]);
      $this->setPermission("ability.access");

   }
   public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
      if(!$sender instanceof Player){
         $sender->sendMessage("El Comando solo puede ser executado por un jugador ");
         return true;
      }
      if(!isset($args[0])) {

                FormUtils::getInstance()->onAbilityUI($sender);

                return true;
      }
   }
}
