<?php

namespace ShxdowFxr\AShop\utils;


use jojoe77777\FormAPI\SimpleForm;
use pocketmine\item\VanillaItems;
use pocketmine\Server;
use onebone\economyapi\EconomyAPI;
use pocketmine\player\Player;
use pocketmine\item\PotionType;
use pocketmine\utils\SingletonTrait;
use ShxdowFxr\AShop\Loader;

class FormUtils {
   use SingletonTrait;
   public const PREFIX = "§l§f[§aAbility§bShop§f] > ";
   
   public function onAbilityUi(Player $player){
      $form = new SimpleForm(function ($player, $data){
		$result = $data;
		if($result === null){
			return true;
			}
			switch($result){
  case 0:
  $this->hasteAbilityShop($player);
   break;
  case 1:
  $this->AbilityHealthShop($player);
   break;
  case 2:
   break;
} 
});
  $form->setTitle("§l§aAbility Shop");
		$form->addButton("§l§eHabilidades Prisa Minera\n§fClick para ver", 0, "textures/ui/haste_effect");
		$form->addButton("§l§eHabilidades Más Vida\n§fClick para ver", 0,"textures/ui/health_boost_effect");
		$form->addButton("§l§cSALIR",0,"textures/ui/redX1");
		$player->sendForm($form);
 }
  
 
   
   public function hasteAbilityShop(Player $player){
      $form = new SimpleForm(function ($player, $data){
		$result = $data;
		if($result === null){
			return true;
			}
			switch($result){
				case 0:
				   $money = EconomyAPI::getInstance()->myMoney($player);
					if($money >= Loader::getInstance()->getConfig()->getNested("haste.1")){
					   $item = VanillaItems::POTION()->setType(PotionType::WITHER());
                $item->setCustomName("§r§l§4Haste 1");
                $item->setLore([
                    "§r§7Haste 1 por 1 hora"]);
                    
                    $item->getNamedTag()->setString("Abilitys_IamFxr","Haste_1");
					   $player->getInventory()->addItem($item);
						 EconomyAPI::getInstance()->reduceMoney($player, Loader::getInstance()->getConfig()->getNested("haste.1"));
						$player->sendMessage(self::PREFIX. " Compraste con éxito la ability");
			
					}else{
						$player->sendMessage(self::PREFIX. " No tienes suficiente §4Dinero §f para comprar esta ability");
					}
            break;
            case 1:
				   $money = EconomyAPI::getInstance()->myMoney($player);
					if($money >= Loader::getInstance()->getConfig()->getNested("haste.2")){
					   $item = VanillaItems::POTION()->setType(PotionType::WITHER());
                $item->setCustomName("§r§l§4Haste 2");
                $item->setLore([
                    "§r§7Haste 2 por 1 hora"]);
                    
                    $item->getNamedTag()->setString("Abilitys_IamFxr","Haste_2");
					   $player->getInventory()->addItem($item);
						 EconomyAPI::getInstance()->reduceMoney($player, Loader::getInstance()->getConfig()->getNested("haste.2"));
						$player->sendMessage(self::PREFIX. " Compraste con éxito la ability");
			
					}else{
						$player->sendMessage(self::PREFIX. " No tienes suficiente §4Dinero §f para comprar esta ability");
					}
            break;
            case 2:
				   $money = EconomyAPI::getInstance()->myMoney($player);
					if($money >= Loader::getInstance()->getConfig()->getNested("haste.3")){
					   $item = VanillaItems::POTION()->setType(PotionType::WITHER());
                $item->setCustomName("§r§l§4Haste 3");
                $item->setLore([
                    "§r§7Haste 3 por 1 hora"]);
                    
                    $item->getNamedTag()->setString("Abilitys_IamFxr","Haste_3");
					   $player->getInventory()->addItem($item);
						 EconomyAPI::getInstance()->reduceMoney($player, Loader::getInstance()->getConfig()->getNested("haste.3"));
						$player->sendMessage(self::PREFIX. " Compraste con éxito la ability");
			
					}else{
						$player->sendMessage(self::PREFIX. " No tienes suficiente §4Dinero §f para comprar esta ability");
					}
            break;
            
            case 3:
               break;
            
   }
      });

	$form->setTitle("§l§aAbility Shop");
		$form->addButton("§l§eHaste 1\n§fPrecio: §a". Loader::getInstance()->getConfig()->getNested("haste.1"), 0,"textures/ui/haste_effect");
		$form->addButton("§l§eHaste 2\n§fPrecio: §a". Loader::getInstance()->getConfig()->getNested("haste.2"), 0,"textures/ui/haste_effect");
		$form->addButton("§l§eHaste 3\n§fPrecio: §a". Loader::getInstance()->getConfig()->getNested("haste.3"), 0,"textures/ui/haste_effect");
		$form->addButton("§l§cSALIR",0,"textures/ui/redX1");
		$player->sendForm($form);
 }
  public function AbilityHealthShop(Player $player) {
$form = new SimpleForm(function ($player, $data){
		$result = $data;
		if($result === null){
			return true;
			}
			switch($result){
  case 0:
				   $money = EconomyAPI::getInstance()->myMoney($player);
					if($money >= Loader::getInstance()->getConfig()->getNested("health.1")){
					   $item = VanillaItems::POTION()->setType(PotionType::WITHER());
                $item->setCustomName("§r§l§4Health 1");
                $item->setLore([
                    "§r§7Health 1 por 1 hora"]);
                    
                    $item->getNamedTag()->setString("Abilitys_IamFxr","Health_1");
					   $player->getInventory()->addItem($item);
						 EconomyAPI::getInstance()->reduceMoney($player, Loader::getInstance()->getConfig()->getNested("health.1"));
						$player->sendMessage(self::PREFIX. " Compraste con éxito la ability");
			
					}else{
						$player->sendMessage(self::PREFIX. " No tienes suficiente §4Dinero §f para comprar esta ability");
					}
            break;
            case 1:
				   $money = EconomyAPI::getInstance()->myMoney($player);
					if($money >= Loader::getInstance()->getConfig()->getNested("health.2")){
					   $item = VanillaItems::POTION()->setType(PotionType::WITHER());
                $item->setCustomName("§r§l§4Health 2");
                $item->setLore([
                    "§r§7Health 2 por 1 hora"]);
                    
                    $item->getNamedTag()->setString("Abilitys_IamFxr","Health_2");
					   $player->getInventory()->addItem($item);
						 EconomyAPI::getInstance()->reduceMoney($player, Loader::getInstance()->getConfig()->getNested("health.2"));
						$player->sendMessage(self::PREFIX. " Compraste con éxito la ability");
			
					}else{
						$player->sendMessage(self::PREFIX. " No tienes suficiente §4Dinero §f para comprar esta ability");
					}
            break;
            case 2:
				   $money = EconomyAPI::getInstance()->myMoney($player);
					if($money >= Loader::getInstance()->getConfig()->getNested("health.3")){
					   $item = VanillaItems::POTION()->setType(PotionType::WITHER());
                $item->setCustomName("§r§l§4Health 3");
                $item->setLore([
                    "§r§7Health 3 por 1 hora"]);
                    
                    $item->getNamedTag()->setString("Abilitys_IamFxr","Health_3");
					   $player->getInventory()->addItem($item);
						 EconomyAPI::getInstance()->reduceMoney($player, Loader::getInstance()->getConfig()->getNested("health.3"));
						$player->sendMessage(self::PREFIX. " Compraste con éxito la ability");
			
					}else{
						$player->sendMessage(self::PREFIX. " No tienes suficiente §4Dinero §f para comprar esta ability");
					}
            break;
          case 3:
          break;
 } 
});
$form->setTitle("§l§aAbility Shop");
		$form->addButton("§l§eHealth 1\n§fPrecio: §a". Loader::getInstance()->getConfig()->getNested("health.1"), 0,"textures/ui/health_boost_effect");
		$form->addButton("§l§eHealth 2\n§fPrecio: §a". Loader::getInstance()->getConfig()->getNested("health.2"), 0,"textures/ui/health_boost_effect");
		$form->addButton("§l§eHealth 3\n§fPrecio: §a". Loader::getInstance()->getConfig()->getNested("health.3"), 0,"textures/ui/health_boost_effect");
		$form->addButton("§l§cSALIR",0,"textures/ui/redX1");
		$player->sendForm($form);
} 
}
