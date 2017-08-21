<?php require_once("includes/db_connection.php");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql = "SELECT username FROM login WHERE username='$user_check'";
$ses_sql = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection);
header('Location: login.php'); // Redirecting To Home Page
}
?>


