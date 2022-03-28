<?php 
include './Layout/header.php';
?>

<?php 

require_once './db_connection.php';

try{
    $sql = "SELECT * FROM drivers";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
} catch (PDOException $e) {
    echo "Select failed: ".$e->getMessage();
}
?>

    <div>
        <h2>Automobilių savininkai</h2>
        <table>
            <tr>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>El. paštas</th>
                <th>Paž. išdavimo data</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            <?php
            foreach($result as $drivers){
                echo "
                <tr>
                    <td><a href='views/profile.php/?id=".$drivers['id']."'>".$drivers['name']."</a></td>
                    <td>".$drivers['lastname']."</td>
                    <td>".$drivers['email']."</td>
                    <td>".$drivers['date_of_issue']."</td>
                    <td>".$drivers['created']."</td>
                    <td>".$drivers['modified']."</td>
                    <td>
                        <a href='views/profile.php?id=".$drivers['id']."'>Auto</a>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>
    <div>
        <p class="addDriver"><a href="./views/drivers.php">Pridėti vairutoją</a></p>
    </div>

<style>
    .addDriver{color: red; font-weight: bold;}
    h2{text-align: center; margin-top: 30px; background-color: whitesmoke;}
    table{width: 100%; display: flex; justify-content: center;}
    th{width: 200px;}
    td{text-align: center; padding: 10px 0 0 10px;}
    .warning{background-color: yellow; border-radius: 25px; width: 100px; padding-right: 40px;}
    .danger{background-color: red; border-radius: 25px; width: 100px; padding-right: 40px;}
    .auto{background-color: blue; border-radius: 25px; width: 100px; padding-right: 40px;}
</style>

<?php 
include("./Layout/footer.php");
?>