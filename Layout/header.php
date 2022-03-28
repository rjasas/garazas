<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garažas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar">
    <div class="logo">
        <a href="../garazas/index.php">GARAŽAS</a>
    </div>
    <div class="meniu">
        <ul class="meniuItems">                          
            <li>
                <a href="http://localhost/practice/garazas/views/trucks.php">AutoParkas</a>
            </li>   
            <li>
                <a href="http://localhost/practice/garazas/index.php">Vairuotojai</a>
            </li>
        </ul>
    </div>
</div>

<style>
    .navbar{width: 100%; height: 40px; display: flex; justify-content: space-around; align-items: center; background-color: whitesmoke;}
    .logo{font-size: 30px;}
    .meniu{width: 40%; height: 40px; margin-bottom: 10px;}
    .meniuItems{ list-style: none; display: flex; flex-wrap: wrap; float: right; }
    a{color: black; text-decoration: none; margin-left: 40px;}
</style>
