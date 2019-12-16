<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./router/assets/css/main.css" >
    <title><?php echo $title;?></title>
</head>
<body style="margin: 0px;">
    <div id="ex">emmmm</div>
        <button type="submit" onclick="f()">ok</button>
    
</body>
<script>
    var i=0;
    function f()
    {
        if(i%2==0)
            document.getElementById("ex").innerHTML="我好可愛";
        else
            document.getElementById("ex").innerHTML="emmmm";
        i+=1;
    }
 
</script>
</html>