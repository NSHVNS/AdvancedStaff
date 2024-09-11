<?php

namespace async;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Core extends PluginBase
{
    use SingletonTrait;

    public function onLoad():void{self::setInstance($this);}

    public function onEnable():void{}
}