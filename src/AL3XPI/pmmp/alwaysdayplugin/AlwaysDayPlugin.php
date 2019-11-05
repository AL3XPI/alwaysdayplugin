namespace AL3XPI/pmmp/alwaysdayplugin;
use pocketmine\plugin\PluginBase;
class MyPlugin extends PluginBase{
 $worldname = "world";
if (!$this->getServer()->isLevelLoaded($worldname)){
 $this->getServer()->loadLevel($worldname);
}
$level = $this->getServer()->getLevelByName($worldname);
$level->setTime(0);
$level->stopTime();
}
