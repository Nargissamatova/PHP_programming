<?php
/*
Create a Class for a Simple Bank Account:

1. Create a PHP class called BankAccount that represents a simple bank account.
2. Include properties such as accountNumber, balance, and ownerName.
3. Implement methods for depositing (deposit()), withdrawing (withdraw()), and checking balance (getBalance()).
4. Add appropriate validation checks, such as ensuring the withdrawal amount does not exceed the balance.
5. Create an instance of the BankAccount class and test its methods with various deposit and withdrawal scenarios.

*/

class BankAccount
{
    public $accountNumber;
    public $balance;
    public $ownerName;

    public function __construct($accountNumber, $balance, $ownerName)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->ownerName = $ownerName;
    }
    // Methods
    public function deposit()
    {
    }
    public function withdraw()
    {
    }
    public function checkBalance()
    {
    }
}
