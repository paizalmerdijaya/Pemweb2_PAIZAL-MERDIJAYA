<?php
require_once './class_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}


$Paizal = new AccountBank('0110', 'Paizal', 500000);
$Merdi = new AccountBank('2210', 'Merdi', 0);
$Jaya = new AccountBank('1401', 'Jaya', 0);

$Paizal->deposit(1000000);
$Paizal->cetak();

$Paizal->doTransfer($Merdi, 1000000);
$Paizal->cetak();

$Paizal->doTransfer($Jaya, 500000);
$Paizal->cetak();