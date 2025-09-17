<?php
include ("config.php");

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="invoices.csv"');
$output = fopen("php://output", "w");

fputcsv($output, array(
    'ID', 'Invoice Number', 'Customer Name', 'Customer Email', 
    'Invoice Date', 'Product Name', 'Quantity', 'Unit Price', 'Total Amount'
));

$result = $conn->query("SELECT * FROM invoices");
while($row = $result->fetch_assoc()){   
    fputcsv($output, $row);
}
fclose($output);
?>

