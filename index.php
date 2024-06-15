<?php require("helper/connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 01</title>
</head>
<body>
    <section>
        <div class="connection">
            <?php 
                $sql = "SELECT * FROM รายการอาหาร";
                $result = mysqli_query($connection,$sql);
                $rows = mysqli_fetch_all($result , MYSQLI_ASSOC);
                var_dump($row);
            ?>
            <?php foreach($rows as $row): ?>
                <h1> <?php echo $row["title"]?></h1>
                <h2> <?php echo $row["price"]?></h2>
            <?php endforeach ?>
        </div>
    </section>
    
</body>
</html>