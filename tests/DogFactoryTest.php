<?php
require_once 'src\DogFactory.php';

use PHPUnit\Framework\TestCase;

class DogFactoryTest extends TestCase {
    public function testCreateShibaInu() {
        $dog = DogFactory::createDog('shibainu');
        $this->assertInstanceOf(ShibaInu::class, $dog);
    }

    public function testCreatePug() {
        $dog = DogFactory::createDog('pug');
        $this->assertInstanceOf(Pug::class, $dog);
    }

    public function testCreateDachshund() {
        $dog = DogFactory::createDog('dachshund');
        $this->assertInstanceOf(Dachshund::class, $dog);
    }

    public function testCreatePlushLabrador() {
        $dog = DogFactory::createDog('plush_labrador');
        $this->assertInstanceOf(PlushLabrador::class, $dog);
    }

    public function testCreateRubberDachshund() {
        $dog = DogFactory::createDog('rubber_dachshund');
        $this->assertInstanceOf(RubberDachshund::class, $dog);
    }

    public function testUnknownBreed() {
        $this->expectException(InvalidArgumentException::class);
        DogFactory::createDog('unknown');
    }
}
?>
