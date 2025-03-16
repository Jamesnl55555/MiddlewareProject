<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <title>Register Page</title>
</head>
<body>
    
<form action="/register" method="POST">
            @csrf
            <h1>Register</h1>
            <dev class="inputCont">
            <input type="text" placeholder="Username" name="name" required>
            </dev>
            <dev class="inputCont">
            <input type="email" placeholder="Email" name="email" id="email" required>
            </dev>
            <dev class="inputCont">
            <input type="password" placeholder="Password" name="password" required>
            </dev>
            <dev class="inputCont">
            <input type="password" placeholder="Confirm Password" name="confirm" required>
            </dev>
            <button type="submit">Register</button>
            
        <a href="/">Already had an account? Login</a>
        </form>
        @if($errors->any())
            <div class="alert">
                {{ $errors->first('error') }}
            </div>
        @endif
</body>
</html>