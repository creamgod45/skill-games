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
		if(!empty($_request['product']))
		{
			echo '<table>';
			echo '<th>商品編號</th><th>商品名稱</th>';
			echo '<th>價格</th><th>數量</th><th>小計</th>';
			$total=0;
			foreach($_session['product'] as $id=>$product)
			{
				echo '<tr>';
				echo '<td>',$id,'</td>';
				echo '<td><a href="detial.php?=',$id,'">',$product['name'],'</a></td>';
				echo '<td>',$product['price'],'</td>';
				echo '<td>',$product['count'],'</td>';
				$subtotal=$product['price']*$product['count'];
				$total+=$subtotal;
				echo '<td>',$subtotal,'</td>';
				echo '<td><a href="cart-delete.php?id',$id,'">刪除</a></td>';
				echo '</tr>';
			}
			echo '<tr><td>合計</td><td></td><td></td><td></td><td>',$total,'</td><td></td></tr>';
			echo '</table>';
		}
		else
		{
			echo '購物車內無商品';
		}
		?>
    </body>
</html>
