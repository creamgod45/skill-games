<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <style>
            body
            {
                margin-top:0px;
                margin-left:0px;
            }
            td
            {
                font-size:20px;
            }
        </style>
        <table>
            <tr>
            <td>編號</td><td>使用者</td><td>密碼</td><td>時間</td></tr>
            <?php
                //$time = date('Y-m-d H:i:s');
                $pdo=new PDO('mysql:host=localhost;dbname=project;charset=utf8','staff','password');
                foreach($pdo->query('select * from leader') as $row)
                {
                    echo '<tr>';
                    echo '<td>', htmlspecialchars($row['id']),'</td>';
                    echo '<td>', htmlspecialchars($row['user']),'</td>';
                    echo '<td>', htmlspecialchars($row['password']),'</td>';
                    echo '<td>', htmlspecialchars($row['time']),'</td>';
                    echo '</tr>';
                    echo "\n";
                }
            ?>
        </table>
    </body>
</html>
