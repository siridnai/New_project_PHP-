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
            $search = $_GET["search"];
            $sql = "SELECT * FROM รายการอาหาร WHERE title LIKE '%$search%'ORDER BY ID DESC";
            $result = mysqli_query($connection,$sql);
            $rows = mysqli_fetch_all($result , MYSQLI_ASSOC);
        ?>
        <form>
            <p>
            <input type="search" name ="search">
            <button type="submit">ค้นหา</button>
            </p>
        </form>
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