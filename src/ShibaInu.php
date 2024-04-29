<?php
require_once 'Dog.php';

class ShibaInu extends Dog {
    public function makeSound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "Hunting...";
    }
}
?>