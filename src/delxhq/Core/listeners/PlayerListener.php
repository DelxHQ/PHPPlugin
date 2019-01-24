<?php
/**
 * Created by PhpStorm.
 * User: delxh
 * Date: 23/01/2019
 * Time: 23:03
 */

namespace delxhq\Core\listeners;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\Plugin;

class PlayerListener implements Listener
{
    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onJoin(PlayerJoinEvent $event)
    {
        $event->getPlayer()->sendMessage('Welcome to the network!');
    }
}