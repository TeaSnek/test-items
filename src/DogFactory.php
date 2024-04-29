<?php

require_once 'Dachshund.php';
require_once 'PlushLabrador.php';
require_once 'Pug.php';
require_once 'RubberDachshund.php';
require_once 'ShibaInu.php';


class DogFactory {
    public static function createDog($breed) {
        switch ($breed) {
            case 'shibainu':
                return new ShibaInu();
            case 'pug':
                return new Pug();
            case 'dachshund':
                return new Dachshund();
            case 'plush_labrador':
                return new PlushLabrador();
            case 'rubber_dachshund':
                return new RubberDachshund();
            default:
                throw new InvalidArgumentException("Unknown breed.");
        }
    }
}
?>