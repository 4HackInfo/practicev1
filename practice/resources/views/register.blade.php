<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
@include('partials.header')

<form action="{{route('register.submit')}}" method="post">
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username">
    <br>
    <label for="password">password</label>
    <input type="password" name="password" id="">
    <br>
    <button type="submit">submit</button>
</form>

    @if(session()->has('sucesss'))
    <div class="alert alert-sucess alert-dismissible fade show" role="alert">
        {{session('sucess')}}
    </div>
    @endif
</body>
</html>