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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <input class="form-control mr-sm-2 twitter-search" type="search"  aria-label="Search">
                </form>
                <div class="nav-item dropdown">
                    @if(! Auth::user())
                    <a class="nav-link dropdown-toggle twitter-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Have an account ? <span>Login</span>
                    </a>
                    @else
                        <a class="nav-link dropdown-toggle twitter-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello  <span>{{Auth::user()->name}}</span>
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
<section class="cover-photo">

</section>
<section class="stats">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="profile-img">

                </div>
            </div>
            <div class="col-lg-5">
                <div class="numbers">
                    <div class="btn custom-btn active-number">
                        <div class="placeholder">Tweets</div>
                        <div class="number">{{Auth::user()->tweets->count()}}</div>
                    </div>
                    <div class="btn custom-btn">
                        <div class="placeholder">Followers</div>
                        <div class="number">{{Auth::user()->followers->count()}}</div>
                    </div>
                    <div class="btn custom-btn">
                        <div class="placeholder">Following</div>
                        <div class="number">13.4K</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-right">
                <div class="follow">
                    <button class="btn btn-outline-secondary"> Follow </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="name-and-handle">
                    <h3 class="name">{{Auth::user()->name}}</h3>
                    <span class="handle">@ {{Auth::user()->name}}</span>
                </div>
                <p class="bio">
                    <span>{{Auth::user()->bio}}</span>
                </p>
                <div class="icons">
                    <div class="icon-element">
                        <div class="icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="text">hola mola</div>
                    </div>
                    <div class="icon-element">
                        <div class="icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="text">hola mola</div>
                    </div>
                    <div class="icon-element">
                        <div class="icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="text">hola mola</div>
                    </div>

                </div>
                <div class="boxes">
                    <div class="group">
                        @foreach($media as $image)
                            <img src="{{$image->image}}" class="box">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="body">
                    <div class="add-tweet">
                        <form action="/insert/tweet" method="post">
                            @csrf
                            <textarea  class="form-control" name="tweet_body" id="" cols="30" rows="10"></textarea>
                            <button type="submit" class="btn">add tweet</button>
                        </form>
                    </div>

                    @foreach($tweets as $tweet)
                    <div class="tweet-card">
                        <div class="poster-image">
                            <img src="https://via.placeholder.com/150" alt="">
                        </div>
                        <div class="tweet-body">

                                <div class="name-more">
                                    <div class="name">
                                        {{$tweet->user->name}}
                                    </div>
                                    <div class="more">
                                        >
                                    </div>
                                </div>
                                <div class="tweet-text">
                                    <div>
                                        {{$tweet->body}}
                                    </div>
                                </div>

                                @if($tweet->image)
                                <div class="tweet-media">

                                </div>
                                @endif
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
</body>
</html>
