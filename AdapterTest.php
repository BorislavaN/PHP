<?php
include_once('AdapterTitle.php');
include_once('AdapterMovie.php');

echo 'test'.'<br/>';
echo '<br/>';
$movie = new AdapterTitle("Star Wars");
$adapterMovie = new AdapterMovie($movie);
echo 'Title: '.$adapterMovie->getTitle();
echo '<br/>'.'<br/>';
echo 'end test'.'<br/>';
?>