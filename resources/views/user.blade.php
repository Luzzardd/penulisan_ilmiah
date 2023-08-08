<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>

<body>
    <div class="wrapper">
        <h1>Daftar Diri</h1>
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
            <div class="login-page">
                <div class="form">
                    <form class="login-form" method="POST" action="{{route('login.auth')}}">
                        @csrf
                        <input type="text" name="name" placeholder="Masukan Nama " />
                        <button>Mulai Bermain</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
