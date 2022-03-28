<?php 
include("../Layout/header.php");
?>

<div class="drivers">
    <form action="../scripts/drivers_insert.php" method="POST">
        <div>
            <input type="text" placeholder="Vairuotojo vardas" name="name" required>
        </div>
        <div>
            <input type="text" placeholder="Vairuotojo pavardė" name="lname" required>
        </div>
        <div>
            <input type="email" placeholder="email@email.lt" name="email" required>
        </div>
        <div>
            <input type="text" placeholder="Išdavimo data" name="date_of_issue" required>
        </div>
        <button type="submit" class="">Registruotis</button>
    </form>
</div>

<style>
    .drivers{width: 100%; display: flex; justify-content: center; margin-top: 50px;}
    input{width: 300px; height: 30px; margin: 20px; border-radius: 0 10px 10px 10px;}
    button{width: 300px; height: 30px; margin-left: 20px; border-radius: 0 10px 0 10px;}
</style>

<?php 
include("../Layout/footer.php");
?>