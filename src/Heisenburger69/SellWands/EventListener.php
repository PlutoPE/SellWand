<?php

namespace Heisenburger69\SellWands;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;

class EventListener implements Listener {

    public function onBlockBreak(BlockBreakEvent $event) {
        if($event->isCancelled()) {
            return;
        }
        /*Idk what to do here ani help me pls Thx*/
