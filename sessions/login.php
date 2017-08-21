<?php
require_once("includes/db_connection.php");
require_once("includes/functions.php");
require_once("includes/password.php");
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "<br>Pogrešno korisničko ime ili lozinka";
}
else
{

$username=test_input($_POST['username']);
$password=test_input($_POST['password']);

$sql = "SELECT password FROM login WHERE username='$username'";
$result = mysqli_query($connection, $sql);
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$pass = $row["password"];


if ((password_verify($password, $pass))) {


$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page


mysqli_close($connection);
}else {$error = "<br>Pogrešno korisničko ime ili lozinka";}}}
?>
