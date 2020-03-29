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
			unset($_session['product'][$_request['id']]);
			echo '所選商品已移出購物車';
			echo '<hr>';
			require 'cart.php';
		?>
    </body>
</html>
