<?php

namespace iiFouzi; // here you should put your plugin name or what  you wrote in plugin.yml ( main: iiFouzi/Main ) .

use pocketmine\Server;
use pocketmime\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command 
use pocketmine\command\CommandSender;

class Main extends PluginBase {
    
    public function onEnable() {
    }
    
    public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) :bool {
        
        switch($cmd->getName()){
        case "tutorial": 
        if($player instanceof Player){
            $player->sendMessage("welcome to your server , have a good day") // when a player use the commad it will send him this message
            }
            break;
            }
            
            return true;
            
     }
            
            
}
