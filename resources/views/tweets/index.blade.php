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

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="left-menu">
                    <li>
                        <div class="list-icon">
                            <svg viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.46 7.57L12.357 2.115c-.223-.12-.49-.12-.713 0L1.543 7.57c-.364.197-.5.652-.303 1.017.135.25.394.393.66.393.12 0 .243-.03.356-.09l.815-.44L4.7 19.963c.214 1.215 1.308 2.062 2.658 2.062h9.282c1.352 0 2.445-.848 2.663-2.087l1.626-11.49.818.442c.364.193.82.06 1.017-.304.196-.363.06-.818-.304-1.016zm-4.638 12.133c-.107.606-.703.822-1.18.822H7.36c-.48 0-1.075-.216-1.178-.798L4.48 7.69 12 3.628l7.522 4.06-1.7 12.015z"></path><path d="M8.22 12.184c0 2.084 1.695 3.78 3.78 3.78s3.78-1.696 3.78-3.78-1.695-3.78-3.78-3.78-3.78 1.696-3.78 3.78zm6.06 0c0 1.258-1.022 2.28-2.28 2.28s-2.28-1.022-2.28-2.28 1.022-2.28 2.28-2.28 2.28 1.022 2.28 2.28z"></path></g></svg>                        </div>
                        <div class="list-text">
                            Home
                        </div>
                    </li>
                    <li>
                        <div class="list-icon">
                            <svg viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M21.697 16.468c-.02-.016-2.14-1.64-2.103-6.03.02-2.532-.812-4.782-2.347-6.335C15.872 2.71 14.01 1.94 12.005 1.93h-.013c-2.004.01-3.866.78-5.242 2.174-1.534 1.553-2.368 3.802-2.346 6.334.037 4.33-2.02 5.967-2.102 6.03-.26.193-.366.53-.265.838.102.308.39.515.712.515h4.92c.102 2.31 1.997 4.16 4.33 4.16s4.226-1.85 4.327-4.16h4.922c.322 0 .61-.206.71-.514.103-.307-.003-.645-.263-.838zM12 20.478c-1.505 0-2.73-1.177-2.828-2.658h5.656c-.1 1.48-1.323 2.66-2.828 2.66zM4.38 16.32c.74-1.132 1.548-3.028 1.524-5.896-.018-2.16.644-3.982 1.913-5.267C8.91 4.05 10.397 3.437 12 3.43c1.603.008 3.087.62 4.18 1.728 1.27 1.285 1.933 3.106 1.915 5.267-.024 2.868.785 4.765 1.525 5.896H4.38z"></path></g></svg>                        </div>
                        <div class="list-text">
                            Notifications
                        </div>
                    </li>
                    <li>
                        <div class="list-icon">
                            <svg viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M12 11.816c1.355 0 2.872-.15 3.84-1.256.814-.93 1.078-2.368.806-4.392-.38-2.825-2.117-4.512-4.646-4.512S7.734 3.343 7.354 6.17c-.272 2.022-.008 3.46.806 4.39.968 1.107 2.485 1.256 3.84 1.256zM8.84 6.368c.162-1.2.787-3.212 3.16-3.212s2.998 2.013 3.16 3.212c.207 1.55.057 2.627-.45 3.205-.455.52-1.266.743-2.71.743s-2.255-.223-2.71-.743c-.507-.578-.657-1.656-.45-3.205zm11.44 12.868c-.877-3.526-4.282-5.99-8.28-5.99s-7.403 2.464-8.28 5.99c-.172.692-.028 1.4.395 1.94.408.52 1.04.82 1.733.82h12.304c.693 0 1.325-.3 1.733-.82.424-.54.567-1.247.394-1.94zm-1.576 1.016c-.126.16-.316.246-.552.246H5.848c-.235 0-.426-.085-.552-.246-.137-.174-.18-.412-.12-.654.71-2.855 3.517-4.85 6.824-4.85s6.114 1.994 6.824 4.85c.06.242.017.48-.12.654z"></path></g></svg>
                        </div>
                        <div class="list-text">
                            Profile
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="body">
                    <div class="add-tweet">
                        <form action="/insert/tweet" method="post">
                            @csrf
                            <textarea  class="form-control add-tweet" name="tweet_body" id="" cols="30" rows="10" placeholder="What is happening ?"></textarea>
                            <button type="submit" class="btn btn-success">add tweet</button>
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
