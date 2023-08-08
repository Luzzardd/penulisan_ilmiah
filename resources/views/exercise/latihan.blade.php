<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
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
            <button class="pre-btn"><img src="{{asset('css/arrow.png')}}" alt=""></button>
            <button class="nxt-btn"><img src="{{asset('css/arrow.png')}}" alt=""></button>
            <div class="product-container">
                @foreach ($kuis as $quiz )
                <form class="product-card" method="POST" action="{{route('soal.start')}}">
                    @csrf
                    <div class="product-image">
                        <input type="text"name='cat_id' value="{{$quiz->id}}" hidden>
                        <img src="{{asset('css/study/'.$quiz->image)}}" class="product-thumb" alt="">
                        <button class="card-btn">Mulai Belajar</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">{{$quiz->name}}</h2>
                        <p class="product-short-description">a short line about the cloth..</p>
                    </div>
                </form>
                @endforeach
            </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
