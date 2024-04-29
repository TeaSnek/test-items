#!/usr/bin/env php
<?php
require_once __DIR__ . '/../src/DogFactory.php';

function main() {
    // Parse command-line arguments
    global $argc, $argv;
    try{
        if ($argc < 3) {
            throw new InvalidArgumentException("Usage: php main.php <breed> <action>");
        }
        $breed = $argv[1];
        $action = $argv[2];
        $dog = DogFactory::createDog($breed);
        switch ($action) {
            case 'sound':
                echo $dog->makeSound() . "\n";
                break;
            case 'hunt':
                echo $dog->hunt() . "\n";
                break;
            default:
                throw new InvalidArgumentException("Unknown action.");
            }
    } catch (InvalidArgumentException $e){
        echo $e->getMessage();
        exit(1);
    }
}

main();
?>