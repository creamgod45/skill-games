<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0;URL=rightuser.php"> 
    <title>刪除使用者</title>
</head>
    <body>
        <?php
            $pdo=new PDO ('mysql:host=localhost;dbname=project;charset=utf8','staff','password');
            $sql=$pdo->prepare('delete from leader where user=?');
            if($sql->execute([$_REQUEST['user']]))
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