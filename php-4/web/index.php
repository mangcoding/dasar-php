<?php 
$heading = "Hello World";
$content= "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sint corrupti distinctio recusandae voluptatibus fugiat, facere dignissimos optio aspernatur laborum velit. Beatae explicabo deleniti, nihil vitae eos placeat minima itaque!";

$keyword = $_GET['keyword'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $heading." ".$keyword; ?></h1>
    <p><?=$content;?></p>

    <form action="" method="get">
        <input type="text" name="keyword" id="keyword">
        <button type="submit">Search</button>
    </form>

    <h3>Menghitung Luas Persegi</h3>
    <form action="action.php" method="post">
        <p>
            <label for="sisi">Sisi</label>
            <input type="number" name="sisi" id="sisi">
        </p>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>