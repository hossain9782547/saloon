<?php

$id = $_POST["sid"];
$name = $_POST["fullName"];
$program = $_POST["program"];

include("db_connection.php");

$sql = "UPDATE students SET name='$name',program='$program' WHERE sid='$id'";
mysqli_query($connection, $sql);

header("Location: students.php");


