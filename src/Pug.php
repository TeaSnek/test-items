<?php
require_once 'Dog.php';

class Pug extends Dog {
    public function makeSound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "Too lazy to hunt.";
    }
}
?>
