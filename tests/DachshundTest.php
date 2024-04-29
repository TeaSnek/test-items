<?php
require_once 'src\Dachshund.php';

use PHPUnit\Framework\TestCase;

class DachshundTest extends TestCase {
    public function testMakeSound() {
        $dachshund = new Dachshund();
        $expectedSound = "Woof! Woof!";
        $this->assertEquals($expectedSound, $dachshund->makeSound());
    }

    public function testHunt() {
        $dachshund = new Dachshund();
        $expectedHunt = "Hunting...";
        $this->assertEquals($expectedHunt, $dachshund->hunt());
    }
}
?>
