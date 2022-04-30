<?php
class Product {
    public static $instance_count = 0;

    protected static $itemnr = 1;
    // public $itemnr;
    protected $name;
    protected $stock = 0;
    protected $minimum_stock;
    protected $price;
    protected $active;

    public function __construct($args=[]) {
        self::$itemnr++;
        // $this->itemnr = $args[itemnr] ?? NULL;
        $this->name = $args['name'] ?? NULL;
        $this->stock = $args['stock'] ?? 0;
        $this->minimum_stock = $args['minimum_stock'] ?? 0;
        $this->price = $args['price'] ?? 0;
        $this->active = $args['active'] ?? false;
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
    // public function setStock($stock) {
    //     $this->stock = $stock;
    // }
    public function setMinimumStock($minimum_stock) {
        $this->minimum_stock = $minimum_stock;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setActive($active) {
        $this->active = $active;
    }
    public function RaiseStock(int $amount) {
        if($this->active == true){
            $this->stock += $amount;
        }
    }
    public function LowerStock(int $amount) {
        if($this->stock - $amount >= $this->minimum_stock && $this->Active() == true){
            $this->stock -= $amount;
        }
    }
    public function __destruct() {
        self::$itemnr--;
        echo "<br>Destroying product\n<br>";
    }

    public function getTotalPrice() {
        return $this->price * $this->stock;
    }

    public function __toString(){
        return "Name: " . $this->Name() . ", Stock: " . $this->Stock() . ", Minimum stock: " . $this->MinimumStock() . ", Price: " . $this->Price() . ", Active: " . $this->Active();
        // echo "Name: " . $this->name . " Stock: " . $this->stock . " Minimum stock: " . $this->minimum_stock . " Price: " . $this->price . " Active: " . $this->active . "\n";
    }
}


// echo "product: <br>";
// $test = new Product(["name" => "Test", "stock" => 10, "minimum_stock" => 5, "price" => 10, "active" => true]);
// $test->RaiseStock(5);
// $test->LowerStock(5);
// echo $test->toString();
// echo "<br>" . $test->getTotalPrice();
// echo "<br>" . $test->Name();
// echo "<br>" . $test->Stock();
// echo "<br>" . $test->MinimumStock();
// echo "<br>" . $test->Price();
// echo "<br>" . $test->Active();
// $test->setName("Test2");
// $test->RaiseStock(100);
// $test->setMinimumStock(5);
// $test->setPrice(15);
// $test->setActive(false);
// echo "<br>" . $test->toString();
// echo "<br>" . $test->getTotalPrice();
// echo "<br>" . $test->Name();
// echo "<br>" . $test->Stock();
// echo "<br>" . $test->MinimumStock();
// echo "<br>" . $test->Price();
// echo "<br>" . $test->Active();


?>