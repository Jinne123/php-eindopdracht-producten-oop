<?php
include 'products.php';

class Dvd extends Product{
    private $duration_minutes;
    private $publication_year;
    private $movie_studio;

    public function __construct($args=[]) {
        parent::__construct($args);
        $this->duration_minutes = $args['duration_minutes'] ?? NULL;
        $this->publication_year = $args['publication_year'] ?? NULL;
        $this->movie_studio = $args['movie_studio'] ?? NULL;
    }

    public function DurationMinutes() {
        return $this->duration_minutes;
    }
    public function PublicationYear() {
        return $this->publication_year;
    }
    public function MovieStudio() {
        return $this->movie_studio;
    }
    public function setDurationMinutes($duration_minutes) {
        $this->duration_minutes = $duration_minutes;
    }
    public function setPublicationYear($publication_year) {
        $this->publication_year = $publication_year;
    }
    public function setMovieStudio($movie_studio) {
        $this->movie_studio = $movie_studio;
    }
    public function getTotalPrice() {
        $total = parent::getTotalPrice();
        return $total * 1.05;
    }

    public function getduration() {
        $duration_hours = floor($this->duration_minutes / 60);
        $duration_minutes = $this->duration_minutes % 60;
        return $duration_hours . "h " . $duration_minutes . "m";
    }
    public function toString(){
        return $this->parent::toString() . ", Duration in minutes: " . $this->DurationMinutes() . ", Publication year: " . $this->PublicationYear() . ", Movie studio: " . $this->MovieStudio();
    }
}


echo "<br> <br>";
echo "dvd: <br>";
$test3 = new Dvd(["name" => "The Matrix", "stock" => 10, "minimum_stock" => 5, "price" => 10, "active" => true, "duration_minutes" => 150, "publication_year" => 1999, "movie_studio" => "Warner Bros."]);
echo $test3->getduration();
echo $test3->getTotalPrice();


?>