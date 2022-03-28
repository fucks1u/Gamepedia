<?php
declare(strict_types=1);
require('vendor/autoload.php');

use \games\model\Game;
use \games\model\Company;
use \games\model\Platform;
use \games\model\Character;

$db = new DB();
$db->addConnection( parse_ini_file('conf.ini'));
$db->setAsGlobal();
$db->bootEloquent();

$liste = Game::where('name', 'like', '%Mario%') ->get();
foreach ($liste as $chibre)
{
    echo $chibre->name;
}
$liste = Company::where('location_country', 'Japan') -> get();