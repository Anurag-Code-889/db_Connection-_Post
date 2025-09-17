<?php
include ("config.php");

if(isset($_POST['import_csv'])){
    $fileName = $_FILES['csvfile']['tmp_name'];

    if($_FILES['csvfile']['size'] > 0){
        $file = fopen($fileName, "r");
        fgetcsv($file); // skip header row

        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            // Matching order with export.php
            $invoice_number = $data[0]; 
            $customer_name  = $data[1];
            $customer_email = $data[2];
            $invoice_date   = $data[3];
            $product_name   = $data[4];
            $quantity       = $data[5];
            $unit_price     = $data[6];
            $total_amount   = $data[7];

            // Insert back into DB
            $sql = "INSERT INTO invoices(invoice_number,customer_name,customer_email,invoice_date,product_name,quantity,unit_price,total_amount)
                    VALUES('$invoice_number','$customer_name','$customer_email','$invoice_date','$product_name','$quantity','$unit_price','$total_amount')";
            $conn->query($sql);
        }
        fclose($file);
        echo "<script>alert('✅ Data Imported Successfully'); window.location='reports.php';</script>";
    }
}
?>