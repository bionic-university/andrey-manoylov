<?php
/**
 * Created by Manoylov.
 */

require_once 'furnitureClasses\Chair.php';
require_once 'masterClasses\FurnitureMaster.php';

//spl_autoload_register(function ($class) {
//    require_once 'src/' . $class . '.php';
//});

$furniture1 = new Chair('chair', true);
$someMaster = new FurnitureMaster('Tom');
$someMaster->setAvailableFurniture($furniture1);
$someMaster->repair();
echo $someMaster->report() . PHP_EOL;

