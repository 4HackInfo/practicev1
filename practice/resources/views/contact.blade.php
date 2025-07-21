<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
   
  @include('partials.header')

<form action="{{ route('contact.submit') }}" method="POST">
  @csrf
  <label>Name: <input type="text" name="name" required></label><br><br>
  <label>Email: <input type="email" name="email" required></label><br><br>
  <button type="submit">Send</button>
</form>

@if(session('success'))
  <div style="color: green;">
    {{ session('success') }}
  </div>
@endif


    
</body>
</html>