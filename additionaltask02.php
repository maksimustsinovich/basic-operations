<?php
$params = $_GET;
$rows = $params["row"];
if (is_numeric($rows) && $rows > 0 && $rows == floor($rows)) {
    $step = round(255 / $rows);
    $color = 255;
    echo "<table>";
    for ($i = 1; $i <= $rows; $i++) {
        $hex = str_pad(dechex($color), 2, "0", STR_PAD_LEFT);
        $rgb = "#$hex$hex$hex";
        echo "<tr style='background-color: $rgb;'>";
        echo "<td>$i</td>";
        echo "</tr>";
        $color -= $step;
    }
    echo "</table>";
} else {
    echo "Need positive integer.\n";
}
?>
