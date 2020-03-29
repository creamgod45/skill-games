<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊1</title>
</head>
    <body>
		<?php
			session_start();
			$name=$address=$login=$password='';
			if(isset($_session['customer']))
			{
				$name=$_session['customer']['name'];
				$address=$_session['customer']['address'];
				$login=$_session['customer']['login'];
				$password=$_session['customer']['password'];
			}
			echo '<form action="customer-output.php" method="post">';
			echo '<table>';
			echo '<tr><td>姓名</td><td>';
			echo '<input type="text" name="name" value="',$name,'>"';
			echo '</td></tr>';
			echo '<tr><td>地址</td><td>';
			echo '<input type="text" name="address" value="',$address,'>"';
			echo '</td></tr>';
			echo '<tr><td>登入ID</td><td>';
			echo '<input type="login" name="login" value="',$login,'>"';
			echo '</td></tr>';
			echo '<tr><td>密碼</td><td>';
			echo '<input type="password" name="password" value="',$password,'>"';
			echo '</td></tr>';
			echo '</table>';
			echo '<input type="submit" value="確定">';
			echo '</form>';
		?>
    </body>
</html>
