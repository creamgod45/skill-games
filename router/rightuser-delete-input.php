<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>刪除使用者</title>
</head>
    <body>
        <style>
            body
            {
                margin-top:0px;
                margin-left:0px;
            }
            body .box
            {
                width:100vw;
                height:100vh;
            }
            body .box .head
            {
                width:80%;
                height:80%;
                margin-top:5%;
                margin-left:10%;
            }
            body .box .head span
            {
                font-size:200%;
            }
            body .box .head a
            {
                font-size:200%;
            }
        </style>
        <?php
            $pdo=new PDO ('mysql:host=localhost;dbname=project;charset=utf8','staff','password');
            foreach($pdo->query('select * from leader') as $row)
            {
                echo '<div class="box">';
                    echo '<div class="head">';
                        echo '<div class="board">';
                            foreach($pdo->query('select * from leader') as $row)
                            {
                                echo '<span>',$row['user'], ' </span> ';
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                echo '<span>',$row['username'],' </span> ';
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                echo '<span>',$row['password'],' </span> ';
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                echo '<span>',$row['time'],'</span> ';
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                echo '<a href="rightuser-delete-output.php?user=',$row['user'],'">確定刪除</a>';
                                echo '<hr><br>';
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        ?>  
        </table>
    </body>
</html>