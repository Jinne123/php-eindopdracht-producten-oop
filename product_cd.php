<?php

class Cd extends Product{
    private $artist;
    private $number_of_songs;
    private $labels;

    public function __construct($args=[]) {
        parent::__construct($args);
        $this->artist = $args[artist] ?? NULL;
        $this->number_of_songs = $args[number_of_songs] ?? NULL;
        $this->labels = $args[labels] ?? NULL;
    }
    
    public function Artist() {
        return $this->artist;
    }
    public function NumberOfSongs() {
        return $this->number_of_songs;
    }
    public function Labels() {
        return $this->labels;
    }
    public function setArtist($artist) {
        $this->artist = $artist;
    }
    public function setNumberOfSongs($number_of_songs) {
        $this->number_of_songs = $number_of_songs;
    }
    public function setLabels($labels) {
        $this->labels = $labels;
    }
    public function getTotalPrice() {
        return $this->parent::getTotalPrice();
    }
    public function toString() {
        return $this->parent::toString() . ", Artist: " . $this->Artist() . ", Number of songs: " . $this->NumberOfSongs() . ", Labels: " . $this->Labels();
    }
}

?>