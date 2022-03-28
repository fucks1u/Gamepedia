<?php
declare(strict_types=1);
require('vendor/autoload.php');

use game\models\Game;
use \games\models\Company;
use \games\models\Platform;
use \games\models\Character;
use Illuminate\Database\Capsule\Manager as DB;

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