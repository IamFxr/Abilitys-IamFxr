<?php

namespace ShxdowFxr\AShop\listener;


use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\player\Player;
use pocketmine\item\Item;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\item\VanillaItems;
use pocketmine\event\player\PlayerItemUseEvent;

class AbilityListener implements Listener {

public function onItemUse(PlayerItemUseEvent $event) {
    $item = $event->getItem();
    $player = $event->getPlayer();
    if($player instanceof Player) {
       if($item->getNamedTag()->getTag("Abilitys_IamFxr") !== null) {
        if($item->getNamedTag()->getString("Abilitys_IamFxr")) 
        {
            $event->cancel();
        } 
       } 
    } 
} 

public function onInteract(PlayerInteractEvent $event): void
    {
        $item = $event->getItem();
        $player = $event->getPlayer();
        if ($player instanceof Player)
            if ($item->getNamedTag()->getTag("Abilitys_IamFxr") !== null) {
                switch ($item->getNamedTag()->getString("Abilitys_IamFxr")) {
                    case "Haste_1":
                       
                       $player->getEffects()->add(new EffectInstance(VanillaEffects::HASTE(), 60 * 20 * 60, 1));
                                                                $item = $event->getItem();
                                $item->pop();
                                
                                $player->getInventory()->setItemInHand($item->setCount($item->getCount() - 1));
                   break;
                   case "Haste_2":
                               $player->getEffects()->add(new EffectInstance(VanillaEffects::HASTE(), 60 * 20 * 60, 2));
                                                                $item = $event->getItem();
                                $item->pop();
                                
                                $player->getInventory()->setItemInHand($item->setCount($item->getCount() - 1));
                   break;
                   case "Haste_3":
                               $player->getEffects()->add(new EffectInstance(VanillaEffects::HASTE(), 60 * 20 * 60, 3));
                                                                $item = $event->getItem();
                                $item->pop();
                                
                                $player->getInventory()->setItemInHand($item->setCount($item->getCount() - 1));
                   break;
                   
                   case "Health_1":
                       
                       $player->getEffects()->add(new EffectInstance(VanillaEffects::HEALTH_BOOST(), 60 * 20 * 60, 1));
                                                                $item = $event->getItem();
                                $item->pop();
                                
                                $player->getInventory()->setItemInHand($item->setCount($item->getCount() - 1));
                   break;
                   case "Health_2":
                               $player->getEffects()->add(new EffectInstance(VanillaEffects::HEALTH_BOOST(), 60 * 20 * 60, 2));
                                                                $item = $event->getItem();
                                $item->pop();
                                
                                $player->getInventory()->setItemInHand($item->setCount($item->getCount() - 1));
                   break;
                   case "Health_3":
                               $player->getEffects()->add(new EffectInstance(VanillaEffects::HEALTH_BOOST(), 60 * 20 * 60, 3));
                                                                $item = $event->getItem();
                                $item->pop();
                                
                                $player->getInventory()->setItemInHand($item->setCount($item->getCount() - 1));
                   break;
                   
                       
                } 
            }
    }
}
