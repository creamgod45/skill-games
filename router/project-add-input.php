<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>專案新增</title>
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
            body .box .body
            {
                width:80%;
                height:80%;
                margin-top:5%;
                margin-left:9%;
                background-color:lightblue;
                display:flex;
                flex-wrap:wrap;
            }
            body .box .body .word
            {
                width:100%;
                height:10%;
                background-color:lightgray;
                padding-top:3%;
            }
            body .box .body .word span
            {
                font-size:150%;
            }
            body .box .body .word1
            {
                width:100%;
                height:5%;
            }
            body .box .body .word1 input
            {
                padding:1%;
            }
        </style>
        <?php
            error_reporting(0);
            session_start();
            $proname=$protalk=$facename=$facetalk=$time='';
            if(isset($_session['project']))
            {
                $proname=$_session['project']['proname'];
                $protalk=$_session['project']['protalk'];
                $facename=$_session['project']['facename'];
                $facetalk=$_session['project']['facetalk'];
                $time = date('Y-m-d H:i:s');
            }
            echo'<form action="project-add-output.php" method="post">';
                echo'<div class="box">';
                    echo'<div class="body">';
                        echo'<div class="word">';
                            echo'<span>專案名稱</span>';
                            echo'<input type="text" name="proname" value="',$proname,'">';
                        echo'</div>';
                        echo' <div class="word">';
                            echo'<span>專案說明</span>';
                            echo'<input type="text" name="protalk" value="',$protalk,'">';
                        echo'</div>';
                        echo'<div class="word">';
                            echo'<span>面相名稱</span>';
                            echo'<input type="text" name="facename" value="',$facename,'">';
                        echo'</div>';
                        echo'<div class="word">';
                            echo'<span>面向說明</span>';
                            echo'<input type="text" name="facetalk" value="',$facetalk,'">';
                        echo'</div>';
                        echo'<div class="word1">';
                            echo'<input type="submit" value="確定">';
                        echo'</div>';
                    echo'</div>';
                echo'</div>';
            echo'</from>';
        ?>
    </body>
</html>