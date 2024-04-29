<?php
require_once 'src\Pug.php';

use PHPUnit\Framework\TestCase;

class PugTest extends TestCase {
    public function testMakeSound() {
        $pug = new Pug();
        $expectedSound = "woof! woof!";
        $this->assertEquals($expectedSound, $pug->makeSound());
    }

    public function testHunt() {
        $pug = new Pug();
        $expectedHunt = "Too lazy to hunt.";
        $this->assertEquals($expectedHunt, $pug->hunt());
    }
}
?>
