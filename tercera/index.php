<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
body{
            max-width: 1500px;
            margin: auto;
            background-color: #1d3578;
            color:white;
            text-align: center;
            font-size:23px; 
}
</style>
    <?php
        do{
            $aleatorio = rand(50,100);
            print ("👉 ". $aleatorio."\n<br> ");
        }
        while ($aleatorio  %7 !=0 );
        //$aleatorio %7 ==0 ;
        //print ($aleatorio."\n<br>");
        //while ($aleatorio != 0 %7);
        //
        print ("Haz ganado 😎");
    ?>
</body>
</html>