<?php 

require_once("../db_connection.php");

$name = $lastname = $email = $date_of_issue = "";

if ($_POST){
    $name = $_POST['name'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $date_of_issue = $_POST['date_of_issue'];
} else {
    header("Location: ../index.php");
    exit;

}

try{
    $sql = "INSERT INTO drivers (name, lastname, email, date_of_issue) VALUES ('$name', '$lastname', '$email', '$date_of_issue')";
    $query = $conn->prepare($sql);
    $query->execute();
    header("Location: ../index.php");
} catch(PDOException $e){
    echo "Insert failed: ". $e->getMessage();
}
?>