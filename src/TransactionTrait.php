<?php
namespace BankingSystem;

// Trait for common transaction behaviors
trait TransactionTrait {
    public function performAction() {
        echo "Performing banking transaction...";
    }
}