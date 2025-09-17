<?php
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="../Libray/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <a href="export.php" class="btn btn-primary mb-2">Export</a>
        <a href="import.php" class="btn btn-primary mb-2">Import</a>
        <table class="table table-bordered table-striped">
            <thead class="table-light ">
                <tr>
                    <th>ID</th>
                    <th>Invoice Number</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Invoice Date</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM invoices");
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['invoice_number']}</td>
                            <td>{$row['customer_name']}</td>
                            <td>{$row['customer_email']}</td>
                            <td>{$row['invoice_date']}</td>
                            <td>{$row['product_name']}</td>
                            <td>{$row['quantity']}</td>
                            <td>{$row['unit_price']}</td>
                            <td>{$row['total_amount']}</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>