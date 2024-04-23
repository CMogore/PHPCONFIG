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

// Perform an action on the banking system
$bankingSystem->performAction();

// Display account information
echo "Account Information:\n";
echo "Account 1: Balance: {$account1->getBalance()}\n";
echo "Account 2: Balance: {$account2->getBalance()}\n";

// Display transaction information
echo "\nTransaction History:\n";
foreach ($bankingSystem->getTransactions() as $transaction) {
    echo "Transaction ID: {$transaction->getTransactionId()}, Amount: {$transaction->getAmount()}, Type: {$transaction->getType()}\n";
}
