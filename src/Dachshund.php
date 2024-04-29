<?php
require_once __DIR__ . '/Dog.php';

class Dachshund extends Dog {
    public function makeSound() {
        return "Woof! Woof!";
    }

    public function hunt() {
        return "Hunting...";
    }
}
?>
