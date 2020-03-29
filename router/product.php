<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>清單</title>
</head>
    <body>
		<form action="product.php" method="post">
		商品收尋
		<input type="text" name="keyword">
		<input type="submit" value="搜尋">
		</from>
		<hr>
		<?php
			echo '<table>';
			echo '<th>商品編號</th><th>商品名稱</th><th>價格</th>';
			$pdo=new PDO('mysql:host=localhost;dbname=shop1;charset=utf8','staff','password');
			if(isset($_REQUEST['keyword']))
			{
				$sql=$pdo->prepare('select * form product where name like?');
				$sql-execute(['%'.$_REQUEST['keyword'].'%']);
			}
			else
			{
				$sql=$pdo->prepare('select * form product');
				$sql->execute([]);
			}
			foreach($sql->fetchAll() as $row)
			{
				$id=$row['id'];
				echo '<tr>';
				echo '<td>',$id,'</td>';
				echo '<td>';
				echo '<a href="detail.php?id=',$id,'">',$row['name'],'</a>';
				echo '</td>';
				echo '<td>',$row['price'],'</td>';
				echo '</tr>';
			}
			echo '</table>';
		?>
    </body>
</html>
