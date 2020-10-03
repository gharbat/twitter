<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/signup" method="post">
    @csrf
    <input type="text" name="name" placeholder="enter your username">
    <input type="email" name="email" placeholder="enter your email">
    <input type="password" name="password" placeholder="enter your password">
    <button type="submit"> signup </button>
</form>
</body>
</html>
