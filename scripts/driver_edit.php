<?php 
require_once '../db_connection.php';

if($_POST){
    try{
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $dos = $_POST['dos'];
        $id = $_POST['id'];

        $sql = "UPDATE drivers SET name = '$name', lastname = '$lname', email = '$email', date_of_issue = '$dos' WHERE id='$id'";
        $query = $conn->prepare($sql);
        // $query->execute();
        $result = $query->execute();

    }catch(PDOException $e){
        echo "Update failed: ".$e->getMessage();
    }
}else{
    header("Location: ../");
}


header("Location: ../views/profile.php?id=$id");

?>