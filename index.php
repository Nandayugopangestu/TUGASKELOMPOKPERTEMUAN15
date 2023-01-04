<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"
    <title></title>
</head>
<body>

<div class="menu">
<h1>MY TEAM</h1>
    <ul>
        <h3>
    <li><a href="index.php">Home</a></li>
    <li><a href="Ketua.php">Ketua</a></li>
    <li><a href="anggota1.php">anggota1</a></li>
    <li><a href="anggota2.php">anggota2</a></li>
    <li><a href="anggota3.php">anggota3</a></li>
    <li><a href="anggota4.php">anggota4</a></li>
        </h3>
    </ul>

</div>


    <?php
    $whitelist = array("Ketua","a","b");

    if (isset($_GET['page']))
    {
        if (!in_array($_GET['page'],$whitelist)){
            die("INVALID");
        }else{
            include "pages/" . $_GET['page'] . "php";
        }
    }
else    
    ?>
</body>
</html>