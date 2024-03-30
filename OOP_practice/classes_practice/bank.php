<?php
/*
Create a Class for a Simple Bank Account:

1. Create a PHP class called BankAccount that represents a simple bank account.
2. Include properties such as accountNumber, balance, and ownerName.
3. Implement methods for depositing (deposit()), withdrawing (withdraw()), and checking balance (getBalance()).
4. Add appropriate validation checks, such as ensuring the withdrawal amount does not exceed the balance.
5. Create an instance of the BankAccount class and test its methods with various deposit and withdrawal scenarios.

*/
// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");

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
    public function setDeposit($deposit)
    {
        return $deposit;
    }
    public function setWithdraw($withdrawAmount)
    {
        if ($this->balance < $withdrawAmount) {
            echo 'Your account balance should be higher than the withdrawal amount ';
        } else {
            return $withdrawAmount;
        }
    }
    public function checkBalance()
    {
        // Method to check balance (return the current balance)
        return $this->balance;
    }
}

$test = new BankAccount(324665, 50, 'John Doe');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["checkBalance"])) {
    $finalBalance = $test->checkBalance();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bank account</h1>
    <form action="bank.php" method="post">
        <h3>Balance: <?= $test->balance ?>€</h3>
        <h3>Owner: <?= $test->ownerName ?></h3>
        <h3>Deposit: <span style="color:green"> +<?= $test->setDeposit(33) ?>€ </span></h3>
        <h3>Withdraw: <span style="color: red">-<?= $test->setWithdraw(13) ?>€</span></h3>
        <input type="submit" value="Check Balance" name="checkBalance">
        <hr>
        <?php if (isset($finalBalance)) : ?>
            <h3>Overall: <?= $finalBalance ?></h3>
        <?php endif; ?>
    </form>
</body>

</html>