<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>清單4</title>
</head>
    <body>
        <table>
        <tr><th>商品編號</th><th>商品名稱</th><th>商品價值</th></tr>
        <?php
        $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
        foreach($pdo->query('select * from product') as $row)
        {
            echo '<tr>';
            echo '<td>', $row['id'], '</td>';
            echo '<td>', $row['name'], '</td>';
            echo '<td>', $row['price'], '</td>';
            echo '</tr>';
            echo "\n";
        }
        ?>
        </table>
    </body>
</html>