<?php
require_once 'Dog.php';

class PlushLabrador extends Dog {
    public function makeSound() {
        return "...";
    }

    public function hunt() {
        return "Plush labrador can't hunt";
    }
}
?>