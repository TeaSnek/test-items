<?php
require_once 'src\RubberDachshund.php';

use PHPUnit\Framework\TestCase;

class RubberDachshundTest extends TestCase {
    public function testMakeSound() {
        $rubberDachshund = new RubberDachshund();
        $expectedSound = "squeeck! squeeck!";
        $this->assertEquals($expectedSound, $rubberDachshund->makeSound());
    }

    public function testHunt() {
        $rubberDachshund = new RubberDachshund();
        $expectedHunt = "Rubber dachshund can't hunt";
        $this->assertEquals($expectedHunt, $rubberDachshund->hunt());
    }
}
?>
