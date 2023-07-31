<?php

namespace jojoe77777\FormAPI;

use pocketmine\plugin\PluginBase;

class FormAPI extends PluginBase{


    public function createSimpleForm(?callable $function = null) : SimpleForm {
        return new SimpleForm($function);
    }

} 
