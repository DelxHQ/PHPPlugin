<?php
/**
 * Created by PhpStorm.
 * User: delxh
 * Date: 23/01/2019
 * Time: 22:57
 */

namespace delxhq\Core;

use delxhq\Core\listeners\PlayerListener;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Core extends PluginBase
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents(new PlayerListener($this), $this);
        $this->getLogger()->alert('Core Enabled');
    }
}