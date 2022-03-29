<?php
declare(strict_types=1);
require('vendor/autoload.php');

use game\models\Company;
use game\models\Game;
use game\models\Game_rating;
use game\models\Rating_board;
use game\models\Platform;
use game\models\Character;
use Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
$db->addConnection( parse_ini_file('conf.ini'));
$db->setAsGlobal();
$db->bootEloquent();

//Scéance 1
/*
$liste1 = Game::where('name', 'like', '%Mario%') ->get();
foreach ($liste1 as $info)
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


// marche pas belek
$liste5 = Game::paginate(
    $perPage = 500, $columns = ['*'], $pageName = 'Game'
);
foreach ($liste5 as $info)
{
    echo $info."<br>";
}


//Scéance 2

$sceance21 = Game::find(12342);
echo "NOM DU JEU : " . $sceance21->name;
$r = $sceance21->character()->get();
echo "<br> <br> PERSOS : <br>";
foreach($r as $value){
    echo 'id : ' . $value->id . ' name : ' .$value->name . ' deck : ' . $value->deck ."<br>" ;
}


$sceance22 = Game::select('*')->where('name','like','Mario%') ->get();

foreach ($sceance22 as $info) {
    echo 'Nom du jeu : ' . $info->name . "<br>";

    $r = $info->character;

    foreach ($r as $value){
        echo ' Nom du personnage : ' .$value->name ."<br>" ;

    }
}



$sceance23 = Company::select('*')->where('name','like','%Sony%')->get();
foreach ($sceance23 as $info) {
    echo 'Nom de la compagnie : ' . $info->name . $info->id. "<br>";

    $r = $info->game_developpers() ->get();

        foreach ($r as $value){
            $name =$value->name;
            echo ' Nom des jeux : ' . $name ."<br>" ;

        }

}
*/
/*
$games = Game::select('*')->where('name','like','%Mario%')->get();
foreach ($games as $game) {
    echo 'Nom du jeux: ' . $game->name . "<br>";

    $r = $game->raiting;

    foreach ($r as $value) {
        $ratingboard = $value->ratingboard;
        echo ' raiting : ' . $ratingboard . "<br>";

    }
}

$sceance25 = Game::select('*')->where('name','like','Mario%')->get();
foreach ($sceance25 as $info){

    $r = $info->character;
    $nb = $r->count();
    if($nb >= 3) {
        echo'nom du jeu : '.$info->name."<br>";
        foreach ($r as $value) {
            echo ' Nom des personnages : ' . $value->name . "<br>";
        }
    }
}


$games = Game::select('*')->where('name','like','Mario%')->wherehas('raiting',function($query){
    $query->where('name','like','%3+%');
})->get();

foreach ($games as $game) {
    echo 'Nom du jeux: ' . $game->name . "<br>";


}

*/

$games = Game::select('*')->where('name','like','Mario%')->wherehas('raiting',function($query){
    $query->where('name','like','%3+%');
})->wherehas('game_publishers',function($query){$query->where('name','like','%Inc.%');})->get();

foreach ($games as $game) {
    echo 'Nom du jeux: ' . $game->name . "<br>";


}


$games = Game::select('*')->where('name','like','Mario%')->wherehas('raiting',function($query){
    $query->where('name','like','%3+%');
})->wherehas('game_publishers',function($query){$query->where('name','like','%Inc.%');})
    ->wherehas('raiting',function($query){$query->where('name','like','%CERO%');})->get();

foreach ($games as $game) {
    echo 'Nom du jeux: ' . $game->name . "<br>";


}

//}


