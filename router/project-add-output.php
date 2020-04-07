<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0;URL=rightuser.php"> 
    <title>Document</title>
</head>
    <body>
        <?php
            error_reporting(0);
            $pdo=new PDO('mysql:host=localhost;dbname=project;charset=utf8','staff','password');
            session_start();
            if(isset($_session['pro']))
            {
                $proname=$_session['pro']['proname'];
                $sql=$pdo->prepare('select * from pro where proname=? and protalk=?');
                $sql->execute([$_POST['proname'],$_POST['protalk']]);
            }
            else
            {
                $sql=$pdo->prepare('select * from pro where proname=?');
                $sql->execute([$_POST['proname']]);
            }
            if(!empty($sql->fetchAll()))
            {
                if(isset($_session['pro']))
                {
                    $sql=$pdo->prepare('update pro set proname=?,protalk=?,facename=?,facetalk=?,time=? ');
                    $sql=$pdo->execute([$_POST['proname'],$_POST['protalk'],
                        $_POST['facename'],$_POST['facetalk'],$_POST['talk']]);
                    $_issest['projrct']=[
                        'proname'=>$_POST['proname'],'protalk'=>$_POST['protalk'],
                        'facename'=>$_POST['facename'],'facetalk'=>$_POST['facetalk'],
                        'time'=>date('Y-m-d H:i:s')
                    ];
                    echo '資料修改完成';
                }
            }
            else
            {
                $sql=$pdo->prepare('insert into pro values(?,?,?,?,?)');
					$sql->execute([
						$_POST['proname'],$_POST['protalk'],
                        $_POST['facename'],$_POST['facetalk'],$time =date('Y-m-d H:i:s') 
                        ]);
					echo '資料新增完成';
            }
        ?>
    </body>
</html>