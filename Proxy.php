<?php
class Proxy{
private $movieList = null;
function __construct() { }
function getMovieCount(){
	if(null == $this->movieList){
		$this->makeMovieList();	}
	return $this->movieList->getMovieCount();
						}
function addMovie($movie){
	if(null == $this->movieList){
		$this->makeMovieList();	}
	return $this->movieList->addMovie($movie);
						}
function getMovie($movieNum){
	if(null == $this->movieList){
		$this->makeMovieList();}
	return $this->movieList->getMovie($movieNum);}
function removeMovie($movie){
	if(null == $this->movieList){
		$this->makeMovieList();}
	return $this->movieList->removeMovie($movie);}
function makeMovieList(){$this->movieList = new movieList();}
}
class MovieList{
private $movies = array();
private $movieCount = 0;
public function __construct(){}
public function getMovieCount(){ 
return $this->movieCount;}
private function setMovieCount($newCount){
$this->movieCount = $newCount;}
public function getMovie($movieNumToGet){
	if((is_numeric($movieNumToGet))&&($movieNumToGet <=$this->getMovieCount())){
		return $this->movies[$movieNumToGet];}
	else{ return null; }				}
public function addMovie(Movie $movieIn){
$this->setMovieCount($this->getMovieCount() + 1);
$this->movies[$this->getMovieCount()] = $movieIn;
return $this->getMovieCount();			}
public function removeMovie(Movie $movieIn){
$count = 0;
while (++$count <= $this->getMovieCount()){
	if($movieIn->getTitle() == $this->movies[$count]->getTitle())
	{	for($con = $count; $con < $this->getMovieCount(); $con ++){
			$this->movie[$con] = $this-> movies[$con +1]; }
		$this->setMovieCount($this->getMovieCount() - 1); } }
	return $this->getMovieCount(); }
}
class Movie{
private $title;
function __construct($titleIn){
$this->title = $titleIn; }
function getTitle() { return $this->title; }
}

echo 'Test'.'<br/>';
echo '<br/>'.'<br/>';
$proxy = new Proxy();
$inMovie = new Movie('Star Wars');
$proxy->addMovie($inMovie);
echo 'test1 - book count '.'<br/>';
echo $proxy->getMovieCount();
echo '<br/>'.'<br/>';
echo 'test 2'.'<br/>';
$outMovie = $proxy->getMovie(1);
echo $outMovie->getTitle();
echo '<br/>'.'<br/>';
$proxy->removeMovie($outMovie);
echo 'test 3 - show movie count after removel'.'<br/>';
echo $proxy->getMovieCount();
echo '<br/>'.'<br/>';
echo 'end'.'<br/>';
?>
