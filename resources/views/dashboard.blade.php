<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <li><form action="logout" method="POST">@csrf<button type="submit">Logout</button></form></li>
</body>
</html>