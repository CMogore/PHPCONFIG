<?php


namespace BankingSystem;

// Class representing a transaction
class Transaction
{
    private $transactionId; // Encapsulation: Property is private to restrict direct access
    private $amount;        // Encapsulation: Property is private to restrict direct access
    private $type;          // Encapsulation: Property is private to restrict direct access

    public function __construct($transactionId, $amount, $type)
    {
        $this->transactionId = $transactionId;
        $this->amount = $amount;
        $this->type = $type;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getType()
    {
        return $this->type;
    }
    public function getTransactionId() {
        return $this->transactionId;
    }
}

