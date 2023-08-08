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
        <div class="con">
        <img src="{{asset('soal/'.$question->soal)}}" class="soal" alt="penjumlahan">
        <form class="form1" method="POST" action="{{route('soal.answer', ['questionNumber' => $questionNumber,'id' => $question->id])}}">
            @csrf
            <label class="JAWABAN" for="nama">Jawaban</label><br>
            <input type="text" id="nama"  name="answers" pattern="\d{2}" maxlength="2"/>
            <button>Submit</button>
        </form>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
