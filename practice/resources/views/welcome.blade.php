<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
<body id="main-body" class="w-full h-screen bg-cover transition-all delay-20 duration-500 ease-in-out text-white bg-fixed bg-center bg-[url(background2.jpg)] bg-blend-overlay bg-black/80">

  @include('partials.header')
  
  <div class="jumbotron text-center bg-black/0 text-white">
    <h1><strong class="text-[100px]">ANDIASON WEB <i class="glyphicon glyphicon-signal"></i></strong></h1>
  </div>

    <div class="container-fluid mt-[50px] h-[50vh]">
    <div class="row">
       <div class="col-sm-6 [background-image:linear-gradient(90deg,transparent_50%,rgba(0,0,0,0.6))">
          <h1><blockquote class="border-1-4 border-green-700 text-[35px]">Welcome to my Personal Site</blockquote></h1>
          <p>
            <blockquote class="border-1-4 border-green-600 text-justify text-[15px]">
          Welcome to my website! This platform is part of my personal journey in learning 
          and improving my skills through practice and hands-on training. Here, I experiment 
          with different tools, designs, and techniques to enhance my knowledge in web development and related technologies. 
          Everything you see on this site reflects my progress, creativity, and dedication to continuous learning 
           
          </blockquote>
          </p>
          <button class="btn border-1 border-white mt-[50px] ml-[25px] hover:bg-yellow-500 hover:text-black w-[30%] transition-all delay-50 duration-200 ease-in-out">
            Get Started <span class="glyphicon glyphicon-menu-right ml-[15px]"></span>
          </button>
          
           <button class="btn border-1 border-white mt-[50px] ml-[25px] hover:bg-yellow-500 hover:text-black w-[30%] transition-all delay-50 duration-200 ease-in-out">
            Documentation <span class="glyphicon glyphicon-th-large ml-[15px]"></span>
          </button>
          
      </div>

      <div class="col-sm-6">
        <img src="hacking1.jpg" alt="" class="h-[50vh] w-[100%] img-rounded">
      </div>
     
    </div>
  </div>

  <div class="container mt-[20px]">
    <h2><blockquote class="border-1-4 border-green-600 text-[25px]"> <i class="glyphicon glyphicon-fire text-orange-500 pr-[10px]"></i>Newest </blockquote></h2>
    <div class="row mt-[10px]">

      <div class="col-sm-4">
        <img src="photos/photo1.jpg" alt="" class="img-rounded object-cover  aspect-[4/3]">
        
      </div>

      <div class="col-sm-4 aspect-[4/3]">
        <img src="photos/photo2.jpg" alt="" class="img-rounded object-cover  aspect-[4/3]">
      
      </div>

      <div class="col-sm-4 aspect-[4/3]">
          <img src="photos/photo3.jpg" alt="" class="img-rounde object-cover  aspect-[4/3]">
      
      </div>
         
      </div>
  </div>
  <div class="container mt-[20px]">
       <h1><blockquote class="border-1-4 border-green-500 text-[25px]"><i class="glyphicon glyphicon-signal pr-[10px]"></i> Table Information </blockquote></h1> 
    <table class="table table-bordered table-hover mt-[30px]">

      <tr class=" hover:text-black">
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
      </tr>

      <tr class=" hover:text-black">
        <td>Christian Andiason</td>
        <td>21</td>
        <td>Inayawan cebu city</td>
      </tr>

      <tr class=" hover:text-black">
        <td>Alguno Joshua</td>
        <td>22</td>
        <td>Colon Cebu city</td>
      </tr>

      <tr class=" hover:text-black  transition delay-100 duration-500 ease-in-out hover:text-center ">
        <td>Eugene Cabellon</td>
        <td>20</td>
        <td>Inayawan cebu city</td>
      </tr>
    </table>
  </div>
    

  <div class="container mt-[30px]">
    <h1><blockquote class="border-1-4 border-green-500 text-[25px] hover:bg-green-500/20 transition-all delay-200 duration-500 ease-in-out"><i class="glyphicon glyphicon-picture pr-[10px]"></i>Courses </blockquote> </h1>

    <div class="row mt-[20px]">
      <div class="col-sm-4">
        <div class="thumbnail border-0 bg-white/0">
          <img src="hacking3.jpg" alt="" class="img-rounded aspect-[4/3]">
          <div class="caption">
            <div class="row">
               <div class="col-sm-7 mt-3 text-right">
                <p><strong class="text-white">UI DESIGN</strong></p>
              </div>
              <div class="col-sm-4 absolute right-0">
              <a href="#" class="btn border-1 border-white top-0 text-white hover:bg-white hover:text-black">see more..</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>

           <div class="col-sm-4">
        <div class="thumbnail border-0 bg-white/0">
          <img src="hacking4.jpg" alt="" class="img-rounded aspect-[4/3]">
          <div class="caption">
            <div class="row">
               <div class="col-sm-8 mt-3 text-right">
                <p><strong class="text-white">DATA ANALYST</strong></p>
              </div>
              <div class="col-sm-4 absolute right-0">
                <a href="#" class="btn border-1 border-white top-0 text-white hover:bg-white hover:text-black">see more..</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>

          <div class="col-sm-4">
        <div class="thumbnail border-0 bg-white/0">
          <img src="programmer2.jpg" alt="" class="img-rounded aspect-[4/3]">
          <div class="caption">
            <div class="row">
               <div class="col-sm-8 mt-3 text-right">
                <p><strong class="text-white">UI DESIGN</strong></p>
              </div>
              <div class="col-sm-4 absolute right-0">
                <a href="#" class="btn border-1 border-white top-0 text-white hover:bg-white hover:text-black">see more..</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container mt-[20px]">
    <div class="page-header">
      <h1><blockquote class="border-1-4 border-green-600 text-[30px]"><i class="glyphicon glyphicon-briefcase top-[5px] pr-[10px]"></i>Why We Serve People. </blockquote></h1>
    </div>
    <h2 class="text-[20px]"><span class="glyphicon glyphicon-user text-green-500 pr-[10px]"></span>We ethically followed the social justice</h2>
    
    <div class="row text-center mt-[20px]">
    <div class="col-sm-4">
      <div class="well bg-blue-800/80">
      <p><span class="glyphicon glyphicon-heart pr-[5px]"></span>LOVE THEM. </p>
    </div>
    </div>
       <div class="col-sm-4">
      <div class="well bg-blue-800/80">
      <p> <span class="glyphicon glyphicon-lock pr-[5px]"></span> SECURED THEM. </p>
    </div>
    </div>
       <div class="col-sm-4">
      <div class="well bg-blue-800/80">
      <p> <span class="glyphicon glyphicon-book px-[5px]"></span> EDUCATE THEM. </p>
    </div>
    </div>
  </div>
   
    <div class="row text-center">
    <div class="col-sm-4">
      <div class="well bg-green-800/80">
      <p>COMMUNICATE THEM <span class="glyphicon glyphicon-phone"></span></p>
    </div>
    </div>
       <div class="col-sm-4">
      <div class="well bg-green-800/80">
      <p><span class="glyphicon glyphicon-user px-[5px]"></span>INTEGRATE THEM.</p>
    </div>
    </div>
       <div class="col-sm-4">
      <div class="well bg-green-800/80">
      <p><span class="glyphicon glyphicon-globe px-[5px]"></span>UNITE THEM.</p>
    </div>
    </div>
    </div>
  </div>

  <div class="container mt-[25px]">
   <p><blockquote class="border-1-4 border-green-600 text-[30px]"> <i class="glyphicon glyphicon-tasks pr-[10px] top-[5px]"></i>Button Classified </blockquote></p>
    
    <div class="row mt-[20px]">
     
      <div class="col-sm-4">
         <p>SINGLE BUTTON</p>
        <button class="btn btn-success btn-md" type="button">Simple Button 1</button>
        <button class="btn btn-danger btn-md" type="button">Simple Buttton 2</button>
        <button class="btn btn-warning btn-md" type="button">Simple Buttton 3</button>
      </div>

      <div class="col-sm-4">
         <p>BLOCK BUTTON</p>
        <button class="btn btn-block btn-primary">Button Block</button>
      </div>

      <div class="col-sm-4">
         <p>GROUP BUTTON</p>
        <div class="btn-group">
          <button class="btn btn-primary">button 1</button>
          <button class="btn btn-success">button 2</button>
          <button class="btn btn-danger">button 3</button>
          <button class="btn btn-info">button 4</button>
          <button class="btn btn-warning">button 5</button>
        </div>
      </div>
    </div>

    <div class="row mt-[50px]">

      <div class="col-sm-4">
        <p>BUTTON GROUP VERTICAL WITH BLOCK</p>
        <div class="btn-group-vertical btn-block">
          <button class="btn btn-primary">button1</button>
          <button class="btn btn-success">button2</button>
        </div>
      </div>

        <div class="col-sm-4">
        <p>BUTTON GROUP JUSTIFIED</p>
        <div class="btn-group-justified">
         <a href="" class="btn btn-primary">button1</a>
         <a href="" class="btn btn-success">button2</a>
         <a href="" class="btn btn-danger">button3</a>
        </div>
      </div>

        <div class="col-sm-4">
        <p>BUTTON GROUP WITH DROPDOWN</p>
        <div class="btn-group">
          <button class="btn btn-primary">programming</button>
          <button class="btn btn-success">services</button>
          
          <div class="btn-group">
            <button class="btn btn-danger dropdown-toggle " data-toggle="dropdown">hacking <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="">Bruteforce</a></li>
              <li><a href="">nmap</a></li>
              <li><a href="">Hashcat</a></li>
              
              <li class="divider"></li>
              <li class="dropdown-header">Social Engineering</li>
              <li><a href="">Scripting</a></li>
              <li><a href="">Web Scraping</a></li>
              <li><a href="">Phishing</a></li>
            </ul>
          </div>
          <button class="btn btn-warning">Documentation</button>
        </div>
        </div>

    </div>
  </div>

  <div class="container mt-[50px]">
  <h1><blockquote class="border-1-4 border-green-500 text-[25px]">Favorate Anime <span class="badge bg-yellow-800">new</span></blockquote></h1>
    <div class="row mt-[50px]">
      <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime1.jpg" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">Naruto Shippuden</strong></p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime2.jpg" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">Black clover</strong></p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime3.png" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">Bleach</strong></p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime4.jpg" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">Hero Academia</strong></p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime5.jpg" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">Demon Slayer</strong></p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime6.png" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">Solo Leveling </strong></p>
          </div>
        </div>
      </div>
      
         <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime7.jpg" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">One Piece</strong></p>
          </div>
        </div>
      </div>  

         <div class="col-sm-3">
        <div class="thumbnail border-0 bg-black/10 text-center">
          <img src="anime8.jpg" alt="" class="img-rounded">
          <div class="caption">
            <p><strong class="text-white">Attack on Titan</strong></p>
          </div>
        </div>
      </div>  
    </div>
  </div>

<!--FOOTERrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->

@include('partials.footer')

<script>

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>