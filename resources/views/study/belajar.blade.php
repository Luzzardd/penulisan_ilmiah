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
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{asset('css/study/warna1.jpeg')}}" class="product-thumb" alt="">
                        <a href="{{route('video',1)}}" class="card-btn"><i class="fa-solid fa-school" ></i> Mulai Belajar</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Mengenal Warna</h2>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{asset('css/study/menghitung.jpeg')}}" class="product-thumb" alt="">
                        <a href="{{route('video',2)}}" class="card-btn"><i class="fa-solid fa-school"></i> Mulai Belajar</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Berhitung</h2>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{asset('css/study/hewan.jpeg')}}" class="product-thumb" alt="">
                        <a href="{{route('video',3)}}" class="card-btn"><i class="fa-solid fa-school"></i> Mulai Belajar</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Mengenal Hewan</h2>
                    </div>
                </div>
            </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://kit.fontawesome.com/031855bb65.js" crossorigin="anonymous"></script>
</body>
</html>
