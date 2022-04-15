<?php
require_once './class_account.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Account Bank</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>No. Accouunt</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;

            $arrAccount = [
                $paizal = new Account('C001', 'Paizal', 6000000),
                $merdi = new Account('C002', 'Merdi', 5350000),
                $jaya = new Account('C003', 'Jaya', 2500000)
            ];

            foreach ($arrAccount as $valueAccount) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $valueAccount->getProperties('nomor'); ?></td>
                    <td><?= $valueAccount->getProperties('nama'); ?></td>
                    <td><?= number_format($valueAccount->getProperties('saldo'), 2, ',', '.'); ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>