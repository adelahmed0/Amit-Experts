<?php
session_start();
// var_dump($_POST['username']);
if ($_POST['username'] && $_POST['password']) {
    $adminInfo = file_get_contents('admin.json');
    $admin = json_decode($adminInfo);
    if($_POST['username'] === $admin->username && $_POST['password'] === $admin->password) {
        $_SESSION['username'] = $admin->username;
        $resp['status'] = true;
        echo json_encode($resp);
        // header("Location: " . $_SERVER['PHP_SELF']);
    }
}