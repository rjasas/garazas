<?php 
include("../Layout/header.php");
require_once '../db_connection.php';

var_dump($_GET);
$id = $_GET['id'];

try{
    $sql = "SELECT * FROM drivers WHERE id = '$id'";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetch();
} catch (PDOException $e) {
    echo "Select failed: ".$e->getMessage();
}
?>


<div class="profile">
    <p><?php echo $result['name'];?></p>
    <p><?php echo $result['lastname'];?></p>
    <p><?php echo $result['email'];?></p>
    <p><?php echo $result['date_of_issue'];?></p>
</div>

<button class='warning'><a href='../driver_edit.php?id=<?php echo $id?>'>Edit</a></button>
<button class='danger'><a href='../scripts/user_delete.php?id=<?php echo $id?>'>Delete</a></button>