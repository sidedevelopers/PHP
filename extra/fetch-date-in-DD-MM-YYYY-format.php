<?php
// Assume $row['date'] contains the date in "YYYY-MM-DD" format retrieved from the database
$date_from_db = $row['date'];

// Convert date to "DD-MM-YYYY" format
$formatted_date = date("d-m-Y", strtotime($date_from_db));

// Output the formatted date
echo $formatted_date;
?>
