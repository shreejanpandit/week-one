<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Welcome!!</h1>
    Hi my name is <b>{{$my_details["name"]}}</b>. I am form {{$my_details["address"]}}.<br>
    <img src='{{$my_details["personal_image"]}}' alt="no image found" height="300" width="300" >
    <h3>
    <a href="/about">About page</a> &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/contact">Contact page</a> 
    </h3>
</body>
</html>