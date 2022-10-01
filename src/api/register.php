<?php
include "../config/db/connection.php";

$data = json_decode(file_get_contents("php://input"), true);

if (isset($_POST) && !is_null($_POST['email']) && !is_null($_POST['password'])) {

    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    
    $sql = "INSERT INTO user (email,password) VALUES ('$email','$password')";

    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "warning";
}

include '../config/db/close.php';

?>