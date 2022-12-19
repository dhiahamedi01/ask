<?php
$username = $_POST["username_s"];
$password = $_POST["password_s"];
include 'connexion.php';
$res="INSERT INTO `client` (`username`,`password`) VALUES ('$username ','$password');";
if ($conn->query($res) == TRUE) {
header("location:login.php");
} else {
echo "Erreur: " . $res . "<br>" . $conn->error;
}
$conn->close();
?>