<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增使用者</title>
</head>
    <body>
        <style>
            body
            {
                margin:0px;
            }
            body .box
            {
                width:100vw;
                height:100vh;
            }
            body .box .head
            {
                margin-top:1%;
                margin-bottom:1%;
                margin-left:40%;
                font-size:200%;
            }
            body .box .body
            {
                margin-top:1%;
                margin-left:5%;
                width:90%;
                height:90%;
                font-size:150%;
            }
        </style>
        <?php
            error_reporting(0);
            //$time = date('Y-m-d H:i:s');
			session_start();
			$user=$username=$password=$time='';
			if(isset($_session['leader']))
			{
				$user=$_session['leader']['user'];
				$username=$_session['leader']['username'];
                $password=$_session['leader']['password'];
                $time = date('Y-m-d H:i:s');
            }
            echo '<form action="rightuser-add-output.php" method="post">';
            echo '<div class="box">';
            echo '<div class="head"> <span>使用者新增</span> </div>';
            echo '<hr>';
            echo '<div class="body">';
                echo '<div class="userid">';
                    echo '<span>使用者名稱：</sapn>';
			        echo '<input type="text" name="user" value="',$user,'>"';
                echo '</div>';
                echo '<div class="username">';
                    echo '<span>帳號：</sapn>';
			        echo '<input type="text" name="username" value="',$username,'>"';
                echo '</div>';
                echo '<div class="password">';
                    echo '<span>密碼：</sapn>';
			        echo '<input type="password" name="password" value="',$password,'>"';
                echo '</div>';
			echo '<input type="submit" value="確定">';
			echo '</form>';
            ?>
    </body>
</html>