<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--Nupu loomine-->
<button type="button" onclick="alert('Tere maailm!')">Tere maailm!</button>
<a href="http://khk.ee/" onclick="alert('Tere maailm!')">Tere maailm!</a>
<a href="#" onclick="alert ('Jääme siia')">Jääme siia</a>
<!--Kass koeraks-->
<!--<img id="meow" src="media/mjau.jpg">
<script>
    $("img#meow").click(function () {
        if($(this).attr("src") == "media/mjau.jpg")
        {
            $(this).attr("src", "media/koer.png");
        }
        else
        {
            $(this).attr("src","media/mjau.jpg");
        }
    });
</script>-->
<img id="meow" src="media/mjau.jpg">
<script>
    $(document).ready(function(){
        $('#meow').click(function(){
            $(this).replaceWith('<img src="media/koer.png">');
        });
    });
</script>
</body>
</html>
<!--
 * Created by PhpStorm.
 * Date: 23/09/2015
 * Time: 10:50
 -->