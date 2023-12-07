<?php
session_start();
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$phone_number= $_POST["phone_number"];
$messagee = $_POST["message"];
$conn = mysqli_connect("localhost", "yordanos", "Jordi@1234@@", "contact") or die("connection failed");
$sql = "INSERT INTO contact_page(full_name, email, phone_number, messagee) VALUES ('{$full_name}','{$email}','{$phone_number}','{$messagee}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

require_once "contact.php";

mysqli_close($conn);
?>