<?php
namespace BankingSystem;

// Class representing a bank account
class Account implements ActionInterface {
    private $accountId; // Encapsulation: Property is private to restrict direct access
    private $balance;   // Encapsulation: Property is private to restrict direct access

    public function __construct($accountId, $balance) {
        $this->accountId = $accountId;
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }
    public function getAccountId() {
        return $this->accountId;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
    // Implementing performAction method from ActionInterface
    public function performAction() {
        echo "Performing action on account {$this->accountId}";
    }
}
?>
