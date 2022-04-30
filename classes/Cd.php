<?php
include_once 'Product.php';


class Cd extends Product{
    private $artist;
    private $number_of_songs;
    private $labels;

    public function __construct($args=[]) {
        parent::__construct($args);
        $this->artist = $args['artist'] ?? NULL;
        $this->number_of_songs = $args['number_of_songs'] ?? NULL;
        $this->labels = $args['labels'] ?? NULL;
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
        return parent::getTotalPrice();
    }
    public function __toString() {
        return parent::__toString() . ", Artist: " . $this->Artist() . ", Number of songs: " . $this->NumberOfSongs() . ", Labels: " . $this->Labels();
    }
}


// echo "<br> <br>";
// echo "cd: <br>";

// $test2 = new Cd(["name" => "The Beatles", "stock" => 10, "minimum_stock" => 5, "price" => 10, "active" => true, "artist" => "Beatles", "number_of_songs" => 10, "labels" => "Parlophone"]);
// echo "<br>" . $test2->NumberOfSongs();
// echo "<br>" . $test2->getTotalPrice();

?>