<?php
$conn = new mysqli('localhost', 'root', 'root', 'homestay2.0');
if($conn->connect_error) {
    echo $error -> $conn->connect_error;
}
?>