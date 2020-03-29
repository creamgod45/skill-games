<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊2</title>
</head>
    <body>
		<?php
			session_start();
			var_dump($_POST);
			$pdo=new PDO('mysql:host=localhost;dbname=shop1;charset=utf8','staff','password');
			if(isset($_session['customer']))
			{
				$id=$_session['customer']['id'];
				$sql=$pdo->prepare('select * from customer where id=? and login=?');
				$sql->execute([$id,$_POST['login']]);
			} 
			else
			{
				$sql=$pdo->prepare('select * from customer where login=?');
				$sql->execute([$_POST['login']]);
			}
			if(empty($sql->fetchAll()))
			{
				if(isset($_session['customer']))
				{
					$sql=$pdo->prepare('update customer set name=?,address=?,login=?,password=?');
					$sql->execute([$_POST['name'],$_POST['address'],$_POST['login'],
						$_POST['password'],$id]);
					$_session['customer']=[
						'id'=>$id,'name'=>$_POST['name'],'address'=>$_POST['address'],
						'login'=>$_POST['login'],'password'=>$_POST['password']];
					echo '客戶資料修改完成';
				}
				else
				{
					$sql=$pdo->prepare('insert into customer values(null,?,?,?,?)');
					$sql->execute([
						$_POST['name'],$_POST['address'],
						$_POST['login'],$_POST['password']]);
					echo '客戶資料新增完成';
				}
			}
			else
			{
				echo '登入ID已被使用，請重新設定';
			}
		?>
    </body>
</html>
