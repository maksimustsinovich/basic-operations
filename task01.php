<?php
array_shift($argv);


foreach ($argv as $param) {
    if (is_numeric($param)) {
        if (is_float($param + 0)) {
            echo "float" . PHP_EOL;
        } else {
            echo "int" . PHP_EOL;
        }
    } else {
        echo "string" . PHP_EOL;
    }
}
?>