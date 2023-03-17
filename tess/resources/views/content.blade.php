<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content {
            margin-left: 115px;
            margin-top: 20px;
            margin-right: 100px;
        }
        .content h1{
            color: blue
        }
    </style>
</head>
<body>
<div class="content">
    <h1 style="color: blue">{{$content['title']}}</h1>
    <h4>{{$content['author']}}</h4>
    <p>{{$content['paragraph']}}</p>
    <div class="return">
        <a href="/blog">return</a>
    </div>
</div>
</body>
</html>
