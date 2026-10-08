<?php
session_start();

$username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
$password = isset($_POST["password"]) ? trim($_POST["password"]) : "";
$token    = isset($_POST["token"]) ? $_POST["token"] : "";

if ($username === "Jack" && $password === "101825819") {
    $_SESSION["user"]  = $username;
    $_SESSION["token"] = $token;
    header("Location: welcome.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>