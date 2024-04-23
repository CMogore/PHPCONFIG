<?php
//interface Logger {
//    public function log($message);
//}
//trait FuelEfficiency {
//    public function calculateFuelConsumption($distance) {
//        return $distance / $this->getFuelEfficiency();
//    }
//}
//
//
//class Car implements Logger {
//// Properties
//public $brand;
//private $model;
//protected $fuelEfficiency;
//
//// Constructor
//public function __construct($brand, $model,$fuelEfficiency) {
//$this->brand = $brand;
//$this->model = $model;
//$this->fuelEfficiency = $fuelEfficiency;
//}
//
//// Method
//public function displayInfo() {
//echo "Brand: {$this->brand}, Model: {$this->model}";
//}
//
//// Method required by the Logger interface
//public function log($message) {
//// For simplicity, we'll just echo the message
//echo $message;
//}
//    public function getFuelEfficiency() {
//        return $this->fuelEfficiency;
//    }
//    use FuelEfficiency;
//}
//$car = new Car("Toyota", "Camry",20);
//$car->displayInfo(); // Output: Brand: Toyota, Model: Camry
//$car->log("Car information logged."); // Output: Car information logged.
//echo $car->calculateFuelConsumption(100);
//?>
<?php

require_once 'vendor/autoload.php';

use BankingSystem\Account;
use BankingSystem\BankingSystem;

// Create instances of Account
$account1 = new Account('123456', 1000);
$account2 = new Account('654321', 2000);

// Create instance of BankingSystem
$bankingSystem = new BankingSystem();

// Add accounts to the banking system
$bankingSystem->addAccount($account1);
$bankingSystem->addAccount($account2);

// Perform transactions
$bankingSystem->deposit($account1, 500);
$bankingSystem->withdraw($account2, 1000);

