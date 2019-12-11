<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./router/assets/css/main.css" >
    <title><?php echo $title;?></title>
    <style>
        #grad
        {
            width:600px;
            height:580px;
            background-color:red;
            background-image: linear-gradient(rgb(100,0,0),rgb(255,0,0));
        }  
    </style>
</head>
<body>
    <form class="form" action="" method="POST">
        <table width="300" height="200">
            <tr>
                <td align="center">
                    
                    <div id="grad" width=800px height=500px>
                            <div><h1><font color=lightblue >照片輪播</font></h1></div>
                            <img id="img" src="./router/assets/images/skill01.jpg" width=500px height=450px>                           
                            <h1>美麗C世界</h1>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>
<script>
    var i = 1;
    var opvalue = 1.0;
    var img = document.getElementById('img');
    setInterval(() => {
        img.style = "opacity:"+ opvalue +";";
        if(opvalue <0){opvalue = 1;}
        opvalue = opvalue - 0.02;
    }, 100);
    setInterval(() => {
        opvalue=1;
        img.src = "./router/assets/images/skill0" + i + ".jpg";
        i = i + 1;
        if(i>2){i=1;}
    }, 3000);
</script>
</html>