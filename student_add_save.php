<?php
echo $_GET["sid"];
die;
$id = $_POST["sid"];
$name = $_POST["fullName"];
$program = $_POST["program"];

include("db_connection.php");

$sql = "INSERT INTO students VALUES ('$id','$name','$program')";
mysqli_query($connection, $sql);

header("Location: students.php");


