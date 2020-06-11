<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php 
    try {
        $db = new PDO('mysql:dbname=mydb3;host=127.0.0.1;charset=utf8','root','root');
    }catch(PDOException $e){
        echo 'DB接続エラー：' . $e->getMessage();
    }
$db->exec('INSERT INTO my_items SET maker_id=1, item_name="もも", price=210, keyword="缶詰,ピンク,甘い"');
?>
</body>
</html>