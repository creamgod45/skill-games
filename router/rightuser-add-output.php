<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="0;URL=rightuser.php"> 
    <title>Document</title>
</head>
    <body>
        <?php
			error_reporting(0);
			session_start();
			$pdo=new PDO('mysql:host=localhost;dbname=project;charset=utf8','staff','password');
			if(isset($_session['leader']))
			{
				$user=$_session['leader']['user'];
				$sql=$pdo->prepare('select * from leader where user=? and username=?');
				$sql->execute([$_POST['user'],$_POST['username']]);
			} 
			else
			{
				$sql=$pdo->prepare('select * from leader where username=?');
				$sql->execute([$_POST['username']]);
			}
			if(empty($sql->fetchAll()))
			{
				if(isset($_session['leader']))
				{
					$sql=$pdo->prepare('update leader set user=?,username=?,password=?,time=?');
					$sql->execute([$_POST['user'],$_POST['username'],$_POST['password'],
						$_POST['time']]);
					$_session['leader']=[
						'user'=>$post['user'],'username'=>$_POST['username'],'password'=>$_POST['password'],
						'time'=>date('Y-m-d H:i:s')];
					echo '資料修改完成';
				}
				else
				{
					$sql=$pdo->prepare('insert into leader values(?,?,?,?)');
					$sql->execute([
						$_POST['user'],$_POST['username'],
						$_POST['password'],$time = date('Y-m-d H:i:s')]);
					echo '資料新增完成';
				}
			}
			else
			{
				echo '登入ID已被使用，請重新設定';
			}
		?>
    </body>
</html>