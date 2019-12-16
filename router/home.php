<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./router/assets/css/main.css" >
    <title><?php echo $title;?></title>
</head>
<body>
    <div class="box" >
        <div class="head">
            會員註冊標單
        </div>
        <form action="" method="POST">
            <div class="body">
                <div class="name">
                    <label>名子：</label>
                    <input type="text" name="name">
                    <span>不正確</span>
                </div>
                <div class="name">
                    <label>帳號：</label>
                    <input type="text" name="name">
                    <span>不正確</span>
                </div>
                <div class="name">
                    <label>密碼：</label>
                    <input type="password" name="name">
                    <span>不正確</span>
                </div>
                <div class="name">
                    <label>再次輸入密碼：</label>
                    <input type="password" name="name">
                    <span>不正確</span>
                </div>
                <div class="name">
                    <label>Email：</label>
                    <input type="email" name="name">
                    <span>不正確</span>
                </div>
            </div>
            <div class="footer">
                <div class="border">
                    <input type="submit" name="submit" value="送出">
                    <input type="reset" value="清除">
                </div>
            </div>
        </form>
    </div>
</body>
<script>
  
</script>
</html>