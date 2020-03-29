<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>清單</title>
</head>
    <body>
		<?php
			session_start();
			if(isset($_session['customer'])
			{
				$pdo=new PDO('mysql:host=localhost;dbname=shop1;charset=utf8','staff','password');
				$pdo=$pdo->prepare('insert into favorite value(?,?)');
				$sql->execute([$_session['customer']['id'],$_request['id']);
				echo '<hr>';
				require 'favorite.php';
			}
			else
			{
				echo '請先登入，才能將商品加入我的最愛。';
			}
		?>
    </body>
</html>
