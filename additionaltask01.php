<?php
$params = $_GET;
if (!empty($params)) {
    echo "<table>";
    echo "<tr><th>Param</th><th>Value</th><th>Type</th></tr>";
    foreach ($params as $key => $value) {
        if (is_numeric($value)) {
            if (is_float($value + 0)) {
                $type = "float";
            } else {
                $type = "int";
            }
        } else {
            $type = "string";
        }
        echo "<tr><th>$key</th><th>$value</th><th>$type</th></tr>";
    }
    echo "</table>";
}