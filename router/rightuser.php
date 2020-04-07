<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
</head>
    <body>
        <style>
            body
            {
                margin-top:0px;
                margin-left:0px;
            }
            .box
            {
                height:100vh;
                width:100vw;
                background-color:white;
                display:flex;
                flex-wrap:wrap;
            }
            .box .head
            {
                width:100%;
                height:10%;
                border-bottom:solid;
                display:flex;
            }
            .box .head .white
            {
                width:20%;
                height:100%;
            }
            .box .head   input
            {
                width:20%;
                height:100%;
                font-size:30px;
            }
            .box .body
            {
                width:100vw;
                height:80vh;
            }
            .box .body .box1
            {
                width:80%;
                height:30%;
                margin-left:10%;
                display:flex;
                flex-wrap:wrap;
                border:solid;
                margin-bottom:5vh;
            }
            .box .body .box1 .user
            {
                width:100%;
                height:33%;
                border-bottom:solid;
                font-size:4vh;
            }
            .box .body .box1 .user1
            {
                width:100%;
                height:33%;
                border-bottom:solid;
                font-size:4vh;
            }
            .box .body .box1 .user2
            {
                width:100%;
                height:33%;
                font-size:4vh;
            }
        </style>
        <div class="box">
            <div class="head">
                <div class="white">
                </div>
                <input type="submit" value="首頁" name="index" onclick="location.href='rightuser.php'">
                <input type="submit" value="使用者管理" name="leader" onclick="location.href='rightuser-menu.php'">
                <input type="submit" value="專案管理" name="delete" onclick="location.href='project-menu.php'">
                <input type="submit" value="統計管理" name="check" onclick="location.href=''">
            </div>
            <div class="body">
                        <?php
                            $pdo=new PDO('mysql:host=localhost;dbname=project;charset=utf8','staff','password');
                            foreach($pdo->query('select * from team') as $row)
                            {
                                echo '<div class="box1">';
                                    echo '<div class="user">';
                                        echo '<span>組長：', htmlspecialchars($row['master']),'</span>';
                                    echo '</div>';
                                    echo '<div class="user1">';
                                        echo '<span>組員：', htmlspecialchars($row['user1']),'</span>';
                                    echo '</div>';
                                    echo '<div class="user2">';
                                        echo '<span>組員：', htmlspecialchars($row['user2']),'</span>';
                                    echo '</div>';
                                echo '</div>';
                            }
                        ?> 
            </div>
        </div>
    </body>
</html>