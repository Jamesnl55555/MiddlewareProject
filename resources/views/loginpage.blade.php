<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <title>Login Page</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <dev class="inputCont">
        <input type="text" placeholder="Email" name="email" required>
        <label for="email" class="form-label">Email</label>
        </dev>
        <dev class="inputCont">
        <input type="password" placeholder="Password" name="password" required>
        <label for="email" class="form-label">Password</label>
        </dev>
        
        <button type="submit">Login</button>
        
    <a href="/registerpage">Register</a>
    </form>
    @if($errors->any())
            <div class="alert">
                {{ $errors->first('error') }}
            </div>
        @endif
</body>
</html>