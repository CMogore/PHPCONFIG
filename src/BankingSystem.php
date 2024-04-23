<?php

namespace BankingSystem;

// Class representing a banking system
// Implementing ActionInterface in BankingSystem class
class BankingSystem implements ActionInterface {
    private $accounts;      // Encapsulation: Property is private to restrict direct access
    private $transactions;  // Encapsulation: Property is private to restrict direct access

    public function __construct() {
        $this->accounts = [];       // Encapsulation: Initialize property in constructor
        $this->transactions = [];   // Encapsulation: Initialize property in constructor
    }

    public function addAccount(Account $account) {
        $this->accounts[$account->getAccountId()] = $account;
    }

    public function deposit(Account $account, $amount) {
        $account->deposit($amount);
        $this->recordTransaction($account, $amount, 'Deposit'); // Polymorphism: Call to recordTransaction method
    }

    public function withdraw(Account $account, $amount) {
        if ($account->withdraw($amount)) {
            $this->recordTransaction($account, $amount, 'Withdrawal'); // Polymorphism: Call to recordTransaction method
            return true;
        }
        return false;
    }
    public function getTransactions() {
        return $this->transactions;
    }

    private function recordTransaction(Account $account, $amount, $type) {
        $transactionId = uniqid(); // Abstraction: Unique ID generation
        $transaction = new Transaction($transactionId, $amount, $type); // Abstraction: Creating Transaction object
        $this->transactions[] = $transaction; // Encapsulation: Accessing property through a method
    }
    // Implementing performAction method from ActionInterface
    public function performAction() {
        echo "Performing action on banking system";
    }
}

