<?php
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import & Export</title>
    <link rel="stylesheet" href="../Libray/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100 ">
            <div class="col-md-6 col-ld-4">
                <div class="card bg-light p-5 shadow text-center">
                    <form method="POST"  enctype="multipart/form-data" onsubmit = "return validateFrom()">
                        <h3 class="mb-4">Invoice Form</h3>

                        <div class="mb-2">
                            <input type="text" class="form-control" name="invoice_number" placeholder="Enter Invoice Number">
                            <div class="error" id="invoice_numberError"></div>
                        </div>
                        
                        <div class="mb-2">
                            <input type="text" class="form-control" name="customer_name" placeholder="Enter Customer Name">
                            <div class="error" id="customer_nameError"></div>
                        </div>
                        
                        <div class="mb-2">
                            <input type="text" class="form-control" name="customer_email" placeholder="Enter Customer Email">
                            <div class="error" id="customer_emailError"></div>
                        </div>
                        
                        <div class="mb-2">
                            <input type="date" class="form-control" name="invoice_date" placeholder="Enter Invoice Date">
                            <div class="error" id="invoice_dateError"></div>
                        </div>
                        
                        <div class="mb-2">
                            <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name">
                            <div class="error" id="product_nameError"></div>
                        </div>
                        
                        <div class="mb-2">
                            <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity">
                            <div class="error" id="quantityError"></div>
                        </div>

                        <div class="mb-2">
                            <input type="text" class="form-control" name="unit_price" placeholder="Enter Unit Price">
                            <div class="error" id="unit_priceError"></div>
                        </div>
                        
                        <div class="mb-2">
                            <input type="text" class="form-control" name="total_amount" placeholder="Enter Total Amount">
                            <div class="error" id="total_amountError"></div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" name="login" class="btn btn-primary">Submit</button>
                            <a href="reports.php" class="btn btn-primary">View Reports</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>