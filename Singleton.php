<?php
class Singleton{
private $MovieTitle = 'Star Wars,Star Trek';
private static $Movie = null;
private static $LoandOut = false;
private function __construct(){}
static function borrowMovie(){
	if(false == self::$LoandOut){
		if(null == self::$Movie)
			{
				self::$Movie = new Singleton();
			}
		self::$LoandOut = true;
		return self::$Movie;
								}
		else
		{ return null;}
}
function returnMovie(Singleton $returndMovie)
{self::$LoandOut = false;}
function getMovieTitle() { return $this->MovieTitle; }
}
class MovieBorrow{
private $borrowMovie;
private $haveMovie = false;
function __construct(){}
	function getMovieTitle(){
	if(true == $this->haveMovie){
	return $this->borrowMovie->getMovieTitle();
								}
	else {return 'No movie';}
							}
function borrowMovie(){
	$this->borrowMovie = Singleton::borrowMovie();
	if($this->borrowMovie == null){
			$this ->haveMovie = false;
		} else { $this ->haveMovie = true;}
						}
function returnMovie(){$this->borrowMovie->returnMovie($this->borrowMovie);}
}

echo 'Testing'.'<br/>';
echo ' '.'<br/>';
$borrowMovie = new MovieBorrow();
$borrowMovie->borrowMovie();
echo 'borrowMovie asked to borrow movie'.'<br/>';
echo 'borrowMovie Title: '.'<br/>';
echo $borrowMovie->getMovieTitle().'<br/>';
echo ' '.'<br/>';

$borrowMovie->returnMovie();
echo 'BorrowMovie returned movie'.'<br/>';
echo ' '.'<br/>';
echo 'End test'.'<br/>';
?>