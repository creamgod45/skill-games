<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>資料刪除2</title>
</head>
    <body>
        <?php
            $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
            $sql=$pdo->prepare('delete from product where id=?');
            if($sql->execute([$_REQUEST['id']]))
            {
                echo '刪除成功';
            }
            else
            {
                echo '刪除失敗';
            }
        ?>
    </body>
</html>