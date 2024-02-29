<?php
$rows = intval($argv[1]);
$table_body = "";
for ($i = 1; $i <= $rows; $i++) {
    $table_body = $table_body."<tr><td>$i</td></tr>";
}


echo "<table>$table_body</table>";