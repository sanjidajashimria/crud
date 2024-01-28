<?php
include "../database/env.php";

$title = $_REQUEST['title'];
$address = $_REQUEST['address'];



$query = "INSERT INTO posts(title, address) VALUES ('$title','$address')";

$res =  mysqli_query($conn, $query);

if($res) {

    header("Location: ../index.php");

}