<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/compiled/app.css">
    <link rel="shortcut icon" href="//abs.twimg.com/favicons/twitter.ico" type="image/x-icon">
    <title>Home page</title>
</head>
<body>
    <div class="container">
    <section class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand twitter-logo" href="#">
                <img src="/twitter.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 twitter-search" type="search" aria-label="Search">
                </form>
                <div class="nav-item dropdown">
                    @if(! Auth::user())
                        <a class="nav-link dropdown-toggle twitter-dropdown" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Have an account ? <span>Login</span>
                        </a>
                    @else
                        <a class="nav-link dropdown-toggle twitter-dropdown" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello <span>{{Auth::user()->name}}</span>
                        </a>
                    @endif
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

            </div>
        </nav>
    </section>
</div>
    <div class="container">
        <div class="notifications mt-3">
            @foreach($notifications as $notification )
                <div class="alert alert-info mt-2"> {{$notification->text}}</div>
            @endforeach
        </div>
    </div>
</body>
</html>