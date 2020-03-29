<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登出2</title>
</head>
    <body>
		<?php
			session_start();
			unset($_session['customer']);
			$pdo=new PDO('mysql:host=localhost;dbame=shop1;charset=utf8','staff','password');
			$sql=$pdo->prepare('select * from customer where login=? and password=?');
			$sql->execute([$_request['login'],$_request['password']]);
			foreach($sql->fetchAll() as $row)
			{
				$_session['customer']=[
					'id'=>$row['id'],'name'=>$row['name'],
					'address'=>$row['address'],'login'=>$row['login'],
					'password'=>$row['password']];
			}
			if(isset($_request['customer']))
			{
				echo '親愛的',$_sessionp['customer']['name'],'、歡迎光臨。';
			}
			else
			{
				echo '登入ID或密碼有誤。';
			}
		?>
    </body>
</html>
