<?php 

class Movie {

  public $title;
  public $description;
  public $genres;
  public $actors;
  public $year;
  public $path;

  public function __construct(string $_title, string $_description, array $_genres, array $_actors, int $_year, string $_path){
    $this->title = $_title;
    $this->description = $_description;
    $this->genres = $_genres;
    $this->actors = $_actors;
    $this->year = $_year;
    $this->path = $_path;
  }

  public function joinNameYear(){
    echo "$this->title - $this->year";
  }

}