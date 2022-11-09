<?php
$conn = mysqli_connect("localhost", "root", "aditya2002", "pim");

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// cek apakah username dan password yang di submit sudah sama dengan yang ada di database email dan password diuat session
function login($data) {
    global $conn;
    $email = $data["email"];
    $password = $data["password"];
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email', password = '$password'");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            header("Location: menuadmin.php");
            exit;
        }
    }
    return [
        "error" => true,
        "pesan" => "username / password salah"
    ];
}
//menerima data dari button submit di form dan memasukan data ke database



?> 