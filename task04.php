<?php
$number = $argv[1];
$num_str = $argv[1];

if (is_numeric($number) && $number >= 0 && $number == floor($number)) {
    $sum = 0;
    while ($number != 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = (int)($number / 10);
    }
    echo "Сумма цифр в числе $num_str равна $sum\n";
} else {
    echo "Неверный параметр: $number. Введите целое положительное число.\n";
}
