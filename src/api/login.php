<?php
include "../config/db/connection.php";

session_start();

$data = json_decode(file_get_contents("php://input"), true);

if (isset($_POST) && !is_null($_POST['email']) && !is_null($_POST['password'])) {

    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];

        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "warning";
}

include '../config/db/close.php';
