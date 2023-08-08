<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h1>Bubbles Animation</h1>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
    <div><span class="dot"></span></div>
</div>
    <div class="container">
        <div class="box">
            <a href="{{route('belajar')}}">
            <div  class="card" >
                <img src="{{asset('css/belajar.jpeg')}}" alt="sapia">
                <div class="intro">
                    <h1>Belajar</h1>
                    <p>Mari <span>belajar</span></p>
                </div>
            </div></a>
            <a href="{{route('latihan')}}">
            <div class="card">
                <img src="{{asset('css/belajar123.png')}}" alt="sapia">
                <div class="intro">
                    <h1>Latihan</h1>
                    <p>Mari <span>Latihan</span></p>
                </div></a>
            </div>
        </div>
    </div>
</body>
</html>
