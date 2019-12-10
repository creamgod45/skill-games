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
    <form class="form" action="" method="POST">
       <div>會員註冊表單</div>
       <table>
           <tr>
               <td>
                    <div class="col name">
                        <span>
                            名字:
                        </span>
                    </div>
                </td>
                <td>    
                    <div>
                        <input type="text">
                    </div>
                </td>
            </tr>
        </table>
        <table>
                <tr>
                    <td>
                         <div class="col username">
                         <span>
                            帳號:
                         </span>
                     </td>
                         </div>
                     <td>    
                         <div>
                             <input type="text">
                         </div>
                     </td>
                 </tr>
             </table>
             <table>
                    <tr>
                        <td>
                             <div class="col password">
                             <span>
                                密碼:
                             </span>
                         </td>
                             </div>
                         <td>    
                             <div>
                                 <input type="password">
                             </div>
                         </td>
                     </tr>
                 </table>
        <table>
           <tr>
               <td>
                    <div class="col again">
                    <span>
                        再次輸入密碼:
                    </span>
                </td>
                    </div>
                <td>    
                    <div>
                        <input type="password">
                    </div>
                </td>
            </tr>
        </table>
        <table>
                <tr>
                    <td>
                         <div class="col email">
                         <span>
                            email:
                         </span>
                     </td>
                         </div>
                     <td>    
                         <div>
                             <input type="email">
                         </div>
                     </td>
                 </tr>
        </table>
        <table>
                <tr>
                    <td>
                        <div>
                            <input type="submit" value="送出" style="width:40px;height:40px:font-size:20px;">
                        </div>
                    </td>
                    <td>    
                        <div>
                            <input type="button" value="清除" style="width:40px;height:40px:font-size:20px;">
                        </div>
                     </td>
                 </tr>
        </table>
    </form>
</body>
</html>