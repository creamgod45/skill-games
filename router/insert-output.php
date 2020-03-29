<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案新增2</title>
</head>
    <body>
            <?php
            $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
            $sql=$pdo->prepare('INSERT INTO `product`(`name`, `price`) VALUES (?,?)');
            if($sql->execute([$_REQUEST['name'],$_REQUEST['price']]))
            {
                echo '新增成功。';
            }
            else
            {
                echo '新增失敗。';   
            }
            ?>
    </body> 
</html>