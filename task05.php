<?php
$words = array_slice($argv, 1);
if (!empty($words)) {
    $max_length = 0;
    $longest_words = [];
    foreach ($words as $word) {
        $length = strlen($word);
        if ($length > $max_length) {
            $max_length = $length;
            $longest_words = [];
            $longest_words[] = $word;
        } elseif ($length == $max_length) {
            $longest_words[] = $word;
        }
    }
    echo "Максимальная длина слова: $max_length\n";
    echo "Самые длинные слова: " . implode(", ", $longest_words) . "\n";
} else {
    echo "Нет параметров. Введите одно или несколько слов.\n";
}
