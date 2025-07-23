<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"><a href="#"></a></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><a href="#"></a></script>
  <script src="https://cdn.tailwindcss.com"><a href="#"></a></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    body {
    font-family: 'Poppins', sans-serif;
    }
</style>
</head>
<body id="main-body" class="w-full h-screen bg-cover text-white bg-fixed bg-center bg-[url(background2.jpg)] bg-blend-overlay bg-black/80">

    @include('partials.header')

    <div class="container flex justify-center h-[80vh]">
        <div class="row flex items-center">
            <div class="col-sm-12 text-center">
                <h1><strong class="text-[100px]">SERVICES<span class="glyphicon glyphicon-briefcase text-[80px] ml-[10px]"></span></strong></h1>
                <h2><strong class="text-[20px]">Show below that provided Services</strong></h2>
                <button class="btn border-1 border-white bg-white/0 mt-[50px] hover:text-white hover:bg-black/50">
                    Get started <span class="glyphicon glyphicon-triangle-bottom "></span></button>
            </div>
            
        </div>
    </div>
</body>
</html>