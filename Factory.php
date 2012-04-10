<?php
abstract class Movie{
public function getTitle(){
	echo $this->title; }
}
class StarWars extends Movie{
private $title = 'Star Wars';
public function getTitle(){
echo $this->title;}
}
class StarTrek extends Movie{
private $title = 'Star Trek';
public function getTitle(){
echo $this->title;}
}
class Factory{
const SW = 'Star Wars';
const ST = 'Star Trek';
public static function createMovie($movieTitle){
switch($movieTitle){
case self::SW:return new StarWars();break;
case self::ST:return new StarTrek();break;
}
die("NO MOVIE"); } }
$factory = new Factory();
$StarWars = $factory ->createMovie(Factory::SW);
$StarWars->getTitle();
$StarTrek = $factory ->createMovie(Factory::ST);
$StarTrek->getTitle();
?>