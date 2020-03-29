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
			if(isset($_session['customer']))
			{
				unset($_session['customer']);
				echo '登出成功';
			}
			else
			{
				echo '你原本就登出';
			}
		?>
    </body>
</html>
