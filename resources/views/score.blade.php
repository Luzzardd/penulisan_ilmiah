<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/sv.css')}}">
</head>
<body>
    <div class="wrapper">
        <h1>Nilai Anda</h1>
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
        <div class="score">
            <h2>{{$user->name}}</h2>
            <h3>{{$hasil}}</h3>
            <h4>tetap semangat</h4>
            <a href="{{route('logout')}}" class="kembali">Home</a>
        </div>
    </div>
</div>

</div>
</body>
</html>
