<?php

class Sofa {
    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct($args=[]) {
        $this->seats = $args[test];
        $this->arms = $args[help];
    }
}

public function __destruct() {
    echo "Destroying sofa\n";
}

class Couch extends Sofa {
    var $arms = 0;
}

$sofa = new Sofa(['test' => 10, 'help' => 5]);
echo "seats: " . $sofa->seats . "\n";
echo "arms: " . $sofa->arms . "\n";
?>