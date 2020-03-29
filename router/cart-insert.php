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
			$id=$_request['id'];
			if(!isset($_session['product']))
			{
				$_session['product']=[];
			}
			$count=0;
			if(isset($_session['product'][$id]))
			{
				$count=$_session['product'][$id]['count'];
			}
			$_session['product'][$id]=[
				'name'=>$_request['name'];
				'price'=>$_request['price'];
				'count'=>$count+$_request['count']];
			echo '<p>商品放入購物車成功。</p>';
			echo '<hr>';
			require 'cart.php';
		?>		
    </body>
</html>
