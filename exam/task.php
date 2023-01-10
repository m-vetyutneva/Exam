<?php

while (true) {
    $roundNumber = 2;
    $currencyDollar = 69.61;
    $currencyRuble = 0.014366;
    echo "Select the currency of the entered number" . PHP_EOL;
    echo "[1] Dollar" . PHP_EOL;
    echo "[2] Ruble" . PHP_EOL;
    $menuItem = readline();
    if ($menuItem == "exit") {
        die;
    }
    if ($menuItem == 1 || $menuItem == 2) {

        echo "Enter the amount:" . PHP_EOL;
        $amount = readline();
        if ($amount == "exit") {
            die;
        }
        if (is_numeric($amount) and ($amount > 0)) {
            if ($menuItem == 1) {
                echo round($amount * $currencyDollar, $roundNumber) . PHP_EOL;
            } else {
                echo round($amount * $currencyRuble, $roundNumber) . PHP_EOL;
            }
        } else {
            echo "Invalid number =>" . PHP_EOL;
        }
    } else {
        echo "Incorrect menu item =>" . PHP_EOL;
    }

}