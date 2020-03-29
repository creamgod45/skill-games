<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>整合1</title>
</head>
    <body>
        <table>
        <tr><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>   
        <tr>
        <from action="edit.php" method="post">
        <input type="hidden" name="command" value="insert">
        <td></td>
        <td><input type="text" name="name"></td>
        <td><input type="text" name="price"></td>
        <td><input type="submit" value="確定新增"></td>
        </from>
        </tr>
        </table>
    </body>
</html>