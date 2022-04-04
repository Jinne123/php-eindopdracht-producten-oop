<?php
class Product {
    public static $instance_count = 0;

    public static $itemnr = 1;
    // public $itemnr;
    public $name;
    public $stock;
    public $minimum_stock;
    public $price;
    public $active;

    public function __construct($args=[]) {
        self::$itemnr++;
        // $this->itemnr = $args[itemnr] ?? NULL;
        $this->name = $args[name] ?? NULL;
        $this->stock = $args[stock] ?? NULL;
        $this->minimum_stock = $args[minimum_stock] ?? NULL;
        $this->price = $args[price] ?? NULL;
        $this->active = $args[active] ?? NULL;
    }

    // public function ItemNr() {
    //     return $this->itemnr;
    // }
    public function Name() {
        return $this->name;
    }
    public function Stock() {
        return $this->stock;
    }
    public function MinimumStock() {
        return $this->minimum_stock;
    }
    public function Price() {
        return $this->price;
    }
    public function Active() {
        return $this->active;
    }
    // public function setItemNr($itemnr) {
    //     $this->itemnr = $itemnr;
    // }
    public function setName($name) {
        $this->name = $name;
    }
    public function setStock($stock) {
        $this->stock = $stock;
    }
    public function setMinimumStock($minimum_stock) {
        $this->minimum_stock = $minimum_stock;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setActive($active) {
        $this->active = $active;
    }

    public function __destruct() {
        echo "Destroying product\n";
    }

    public function toString(){
        echo "Name: " . $this->name . " Stock: " . $this->stock . " Minimum stock: " . $this->minimum_stock . " Price: " . $this->price . " Active: " . $this->active . "\n";
    }
}


?>