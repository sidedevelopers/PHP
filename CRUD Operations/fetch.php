<?php

$result = $conn->query("SELECT * FROM gath");

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['amount'] . '</td>';
    echo '<td>' . date("d-m-Y", strtotime($row['date'])) . '</td>';
    echo '</tr>';
}

?>