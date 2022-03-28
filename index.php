<?php
declare(strict_types=1);
require('vendor/autoload.php');

use game\models\Company;
use game\models\Game;
use game\models\Platform;
use game\models\Character;
use Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
$db->addConnection( parse_ini_file('conf.ini'));
$db->setAsGlobal();
$db->bootEloquent();
/*
$liste = Game::where('name', 'like', '%Mario%') ->get();
foreach ($liste as $info)
{
    echo $info->name."<br>";
}


$liste2 = Company::where('location_country','=', 'Japan') -> get();
foreach ($liste2 as $info)
{
    echo $info->id . " " . $info->name."<br>";
}

$liste3 = Platform::where('install_base','>=', '10000000') -> get();
foreach ($liste3 as $info)
{
    echo $info->id . " " . $info->name."<br>";
}


$liste4 = Game::take(442)->skip(21173)->get();
foreach ($liste4 as $info)
{
    echo $info->name."<br>";
}
*/


$liste5 = Game::paginate(
    $perPage = 500, $columns = ['*'], $pageName = 'Game'
);
foreach ($liste5 as $info)
{
    echo $info->name."<br>";
}


