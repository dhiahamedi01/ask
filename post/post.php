<?php
$question = $_POST["question"];
include 'connexion.php';
$res="INSERT INTO `post` (`question`) VALUES ('$question ');";
if ($conn->query($res) == TRUE) {
header("location:index.php");
} else {
echo "Erreur: " . $res . "<br>" . $conn->error;
}
$conn->close();
?>