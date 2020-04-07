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
                margin:0px;
            }
            body .box
            {
                width:100vw;
                height:100vh;
            }
            body .box .body
            {
                margin-top:5%;
                margin-left:10%;
                width:30%;
                height:80%;
                display:flex;
                flex-wrap:wrap;
            }
            body .box .body input
            {
                width:100%;
                height:20%;
                font-size:200%;
            }
        </style>
        <div class="box">
            <div class="body">
                <input type="submit" value="新增" name="add" onclick="location.href='project-add-input.php'">
                <input type="submit" value="修改" name="fix" onclick="location.href='project-fix.php'">
                <input type="submit" value="刪除" name="delete" onclick="location.href='project-delete-input.php'">
                <input type="submit" value="檢視" name="check" onclick="location.href='rightuser.php'">
            </div>
        </div>
    </body>
</html>