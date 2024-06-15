<?php require("helper/connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 01</title>
</head>
<body>
    <div>
        <?php 
            $sql = "SELECT * FROM รายการอาหาร";
            $result = mysqli_query($connection,$sql);
            $rows = mysqli_fetch_all($result , MYSQLI_ASSOC);
        ?>
        <h1>พบสีจำนวน <?php echo count($rows) ?> รายการ</h1>
        <?php foreach($rows as $row): ?>
            <div>
                <h1> <?php echo $row["title"]?></h1>
                <h2> <?php echo $row["price"]?></h2>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>

<?php mysqli_close($connection);