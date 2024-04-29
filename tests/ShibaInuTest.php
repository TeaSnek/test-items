<?php
require_once 'src\ShibaInu.php';

use PHPUnit\Framework\TestCase;

class ShibaInuTest extends TestCase {
    public function testMakeSound() {
        $shibaInu = new ShibaInu();
        $expectedSound = "woof! woof!";
        $this->assertEquals($expectedSound, $shibaInu->makeSound());
    }

    public function testHunt() {
        $shibaInu = new ShibaInu();
        $expectedHunt = "Hunting...";
        $this->assertEquals($expectedHunt, $shibaInu->hunt());
    }
}
?>
