<?php

include '../layout/header.php';
require_once '../db_connection.php';

if($_GET){
    try{
        $id = $_GET['id'];
        $sql = "SELECT * FROM drivers WHERE id='$id'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->fetch();
    } catch(PDOException $e){
        echo "Select failed: ".$e->getMessage();
    }
}

?>

<div class="edit">
    <form action="../scripts/driver_edit.php" method="POST">
        <div>
            <input type="text" placeholder="Name" name="name" value="<?php echo $result['name'];?>">
        </div>
        <div>
            <input type="text" placeholder="Last Name" name="lname" value="<?php echo $result['lastname'];?>">
        </div>
        <div>
            <input type="email" placeholder="your@email.name" name="email" value="<?php echo $result['email'];?>">
        </div>
        <div>
            <input type="text" placeholder="Date Of Issue" name="dos" value="<?php echo $result['date_of_issue'];?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
        <button type="submit" class="">EDIT</button>
    </form>
</div>

<style>
    .register{width: 100%; display: flex; justify-content: center; margin-top: 50px;}
    input{width: 300px; height: 30px; margin: 20px;}
    button{width: 300px; height: 30px; margin-left: 20px;}
</style>

<?php include '../layout/footer.php' ?>