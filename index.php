<?php
spl_autoload_register(function ($class_name) {
    include "classes/$class_name.php";
});


$Csv = new Csv();
foreach ($Csv->read("csv/bestand.csv") as $key => $value) {
    $product = new Product(["name" => $value["naam"], "stock" => $value["aantalInVoorraad"], "minimum_stock" => $value["minimumVoorraad"], "price" => $value["prijs"], "active" => $value["actief"]]);
    echo $product;
}
echo "<br><br><br>";
$Csv2 = new Csv();
foreach ($Csv2->read("csv/bestand2.csv") as $key => $value) {
    $cd = new Cd(["name" => $value["naam"], "stock" => $value["aantalInVoorraad"], "minimum_stock" => $value["minimumVoorraad"], "price" => $value["prijs"], "active" => $value["actief"], "artist" => $value["artiest"], "number_of_songs" => $value["aantalSongs"], "labels" => $value["label"]]);
    echo $cd;
}
echo "<br><br><br>";
$Csv3 = new Csv();
foreach ($Csv3->read("csv/bestand3.csv") as $key => $value) {
    $product = new Product(["name" => $value["naam"], "stock" => $value["aantalInVoorraad"], "minimum_stock" => $value["minimumVoorraad"], "price" => $value["prijs"], "active" => $value["actief"]]);
    echo $product;
}


echo "<br> <br> <br>";
echo "<br><br><br>cd: <br>";

$test2 = new Cd(["name" => "The Beatles", "stock" => 10, "minimum_stock" => 5, "price" => 10, "active" => true, "artist" => "Beatles", "number_of_songs" => 10, "labels" => "Parlophone"]);
echo "<br>" . $test2->NumberOfSongs();
echo "<br>" . $test2->getTotalPrice();




echo "<br> <br>";
echo "<br><br><br>dvd: <br>";
$test3 = new Dvd(["name" => "The Matrix", "stock" => 10, "minimum_stock" => 5, "price" => 10, "active" => true, "duration_minutes" => 150, "publication_year" => 1999, "movie_studio" => "Warner Bros."]);
echo $test3->getduration();
echo $test3->getTotalPrice();





echo "<br><br><br>product: <br>";
$test = new Product(["name" => "Test", "stock" => 10, "minimum_stock" => 5, "price" => 10, "active" => true]);
$test->RaiseStock(5);
$test->LowerStock(5);
echo $test;
echo "<br>" . $test->getTotalPrice();
echo "<br>" . $test->Name();
echo "<br>" . $test->Stock();
echo "<br>" . $test->MinimumStock();
echo "<br>" . $test->Price();
echo "<br>" . $test->Active();
$test->setName("Test2");
$test->RaiseStock(100);
$test->setMinimumStock(5);
$test->setPrice(15);
$test->setActive(false);
echo "<br>" . $test;
echo "<br>" . $test->getTotalPrice();
echo "<br>" . $test->Name();
echo "<br>" . $test->Stock();
echo "<br>" . $test->MinimumStock();
echo "<br>" . $test->Price();
echo "<br>" . $test->Active();
?>