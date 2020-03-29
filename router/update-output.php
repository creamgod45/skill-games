<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <title>資料跟改2</title>
</head>
    <body>
        <?php
        $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
        $sql=$pdo->prepare('update product set name=?,price=? where id =?');
        if(empty($_REQUEST['name']))
        {
            echo '請輸入商品名稱。';
        } 
        else if($sql->execute([htmlspecialchars($_REQUEST['name']) , $_REQUEST['price'] , $_REQUEST['id']]))
        {
            echo '修改成功';
        }
        else
        {
            echo '修改失敗';
        }
        ?>
    </body>
</html>