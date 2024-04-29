<?php
require_once 'Dog.php';

class RubberDachshund extends Dog {
    public function makeSound() {
        return "squeeck! squeeck!";
    }

    public function hunt() {
        return "Rubber dachshund can't hunt";
    }
}
?>