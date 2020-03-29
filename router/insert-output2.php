<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案新增4</title>
</head>
    <body>
            <?php
            $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
            $sql=$pdo->prepare('insert into product values(null, ?, ?)');
            if(empty($_REQUEST['name']))
            {
                echo '請輸入商品名稱。';
            }
            else if(!preg_match('/[0-9]+/',$_REQUEST['price']))
            {
                echo '請以整數輸入商品價格。';
            }
            else
                if($sql->execute([htmlspecialchars($_REQUEST['name'])],$_REQUEST['price']))
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