<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "report";

$conn = new mysqli($host,$user,$password,$database);

session_start();

if(isset($_POST['login'])){
    $invoice_number = $_POST['invoice_number'];
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $invoice_date = $_POST['invoice_date'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];
    $total_amount = $_POST['total_amount'];
    
    $sql="insert into invoices(invoice_number,customer_name,customer_email,invoice_date,product_name,quantity,unit_price,total_amount)
    values('$invoice_number','$customer_name','$customer_email','$invoice_date','$product_name','$quantity','$unit_price','$total_amount')";
    
    $sql = $conn->prepare($sql);
    $sql->execute();
    if ($sql->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: ";
    }
}
?>