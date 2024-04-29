<?php
require_once 'src\PlushLabrador.php';

use PHPUnit\Framework\TestCase;

class PlushLabradorTest extends TestCase {
    public function testMakeSound() {
        $plushLabrador = new PlushLabrador();
        $expectedSound = "...";
        $this->assertEquals($expectedSound, $plushLabrador->makeSound());
    }

    public function testHunt() {
        $plushLabrador = new PlushLabrador();
        $expectedHunt = "Plush labrador can't hunt";
        $this->assertEquals($expectedHunt, $plushLabrador->hunt());
    }
}
?>
