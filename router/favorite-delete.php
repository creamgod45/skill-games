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
			if(isset($_session['customer']))
			{
				$pdo=new PDO('mysql:host=localhost;dbname=shop1;charset=utf8','staff','password');
				$sql=$$pdo->prepare('delect from favorite where customer_id=? and product_id=?');
				$sql->execute([$_session['customer']['id'],$_request['id']]);
				echo '所選商品以從我的最愛移除';
				echo '<hr>';
			}
			else
			{
				echo '請先登入，才能將商品從我的最愛刪除';
			}
			require 'favorite.php';
		?>
    </body>
</html>
