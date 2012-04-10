<?php
include_once('AdapterTitle.php');
class AdapterMovie{
private $movie;
function __construct(AdapterTitle $movieIn){$this->movie=$movieIn;}
function getTitle(){return $this->movie->getTitle();}
}
?>