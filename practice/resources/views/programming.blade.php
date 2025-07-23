<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Programming</title>
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
<body id="main-body" class="w-full h-screen bg-cover text-white bg-fixed bg-center bg-[url(background2.jpg)] bg-blend-overlay bg-black/80 transition-all delay-20 duration-500 ease-in-out">

    @include('partials.header')

    <div class="container flex justify-center h-[100vh]">
        <div class="row flex items-center h-[90vh]">
            <div class="col-sm-12 text-center">
                <h1><strong class="text-[100px]">PROGRAMMING <span class="glyphicon glyphicon-fire"></span>.</strong></h1>
                <h2><strong class="text-[20px]">This is my programming language I been used.</strong></h2>
                <a href="#programming" class="btn border-1 border-white bg-white/0 mt-[50px] hover:text-black hover:bg-white transition-all delay-20 duration-500 ease-in-out ">
                    Get started <span class="glyphicon glyphicon-triangle-bottom "></span></a>
            </div>
        </div>
    </div>

    <div class="container h-[100vh]" id="programming">
        <div class="row ">
            <div class="col-sm-6 flex justify-center">
                <img src="logo/js.png" alt="" class="w-[50%]">
            </div>
            <div class="col-sm-6">
                <h1><blockquote class="border-1-4 border-green-700 text-[50px] mb-[20px] text-yellow-200 hover:bg-yellow-800/50 transition-all delay-20 duration-500 ease-in-out">
                    Javascript</blockquote></h1>
                    <p  class="leading-[30px]"><strong>JavaScript is perfect for building functional and interactive web apps because it runs 
                        in the browser, responds instantly to user actions, and dynamically updates content without page reloads. 
                        Its event-driven nature handles clicks, inputs, and gestures seamlessly, while asynchronous features like Promises
                        enable smooth background operations. With powerful DOM manipulation
                        and frameworks like React and Vue, JavaScript makes it easy to create fast, engaging,
                        and responsive user experiences.</strong></p>
                <button class="btn bg-white/0 border-1 border-white">see more <span class="glyphicon glyphicon-menu-right"></span></button>
            </div>
        </div>
        
            <div class="row mt-[70px]">
            <div class="col-sm-6 flex justify-center">
                <img src="logo/python.png" alt="" class="w-[50%]">
            </div>
            <div class="col-sm-6">
                <h1><blockquote class="border-1-4 border-green-700 text-[50px] mb-[20px] text-yellow-200 hover:bg-yellow-800/50 transition-all delay-20 duration-500 ease-in-out">
                    Python</blockquote></h1>
                    <p  class="leading-[30px]"><strong>
                        Python is known for its simplicity and readability, making it one of the best programming 
                        languages for beginners. Its clean and easy-to-understand syntax allows you to write 
                        programs quickly without needing a lot of code. It’s used in a wide range of fields—from 
                        simple scripts and websites to advanced topics like artificial intelligence and data science.
                    </strong></p>
                <button class="btn bg-white/0 border-1 border-white">see more <span class="glyphicon glyphicon-menu-right"></span></button>
            </div>
        </div>

           <div class="row mt-[70px]">
            <div class="col-sm-6 flex justify-center">
                <img src="logo/php.png" alt="" class="w-[50%]">
            </div>
            <div class="col-sm-6">
                <h1><blockquote class="border-1-4 border-green-700 text-[50px] mb-[20px] text-yellow-200 hover:bg-yellow-800/50 transition-all delay-20 duration-500 ease-in-out">
                    Php</blockquote></h1>
                    <p  class="leading-[30px]"><strong>
                        PHP (Hypertext Preprocessor) is a server-side scripting language mainly used for web development. It’s designed to 
                        work smoothly with HTML and is often used to create dynamic websites, meaning websites that change based on user 
                        actions—like logging in, submitting forms, or displaying user-specific content. Platforms like WordPress, Facebook 
                        (originally), and many online stores use PHP to manage content, process data, and connect with databases like MySQL.</strong></p>
                <button class="btn bg-white/0 border-1 border-white">see more <span class="glyphicon glyphicon-menu-right"></span></button>
            </div>
        </div>

             <div class="row mt-[70px]">
            <div class="col-sm-6 flex justify-center">
                <img src="logo/bash.png" alt="" class="w-[50%]">
            </div>
            <div class="col-sm-6">
                <h1><blockquote class="border-1-4 border-green-700 text-[50px] mb-[20px] text-yellow-200 hover:bg-yellow-800/50 transition-all delay-20 duration-500 ease-in-out">
                    Bash</blockquote></h1>
                    <p  class="leading-[30px]"><strong>
                       Bash (Bourne Again SHell) is a scripting language commonly used in Linux and Unix systems for managing 
                       and automating tasks. It allows users to write scripts that perform repetitive system-level tasks 
                       like moving files, installing software, or checking system health. Instead of typing each
                        command manually in the terminal, Bash scripts let you bundle everything into a script that 
                        can be run automatically.

                </strong></p>
                <button class="btn bg-white/0 border-1 border-white">see more <span class="glyphicon glyphicon-menu-right"></span></button>
            </div>
        </div>

        <div class="row mt-[70px]">
            <div class="col-sm-6 flex justify-center">
                <img src="logo/java.png" alt="" class="w-[50%]">
            </div>
            <div class="col-sm-6">
                <h1><blockquote class="border-1-4 border-green-700 text-[50px] mb-[20px] text-yellow-200 hover:bg-yellow-800/50 transition-all delay-20 duration-500 ease-in-out">
                    Java</blockquote></h1>
                    <p  class="leading-[30px]"><strong>
                       Java is one of the most widely used programming languages in the world, especially for building applications
                       that can run on different devices. It’s best known for its ability to "write once, run anywhere," meaning 
                       the same code can work on Windows, Mac, Android, or other 
                       platforms without needing to be changed. It’s commonly used in Android app development, desktop applications, 
                       and large enterprise systems.

                </strong></p>
                <button class="btn bg-white/0 border-1 border-white">see more <span class="glyphicon glyphicon-menu-right"></span></button>
            </div>
        </div>

              <div class="row mt-[70px]">
            <div class="col-sm-6 flex justify-center">
                <img src="logo/cpp.png" alt="" class="w-[50%]">
            </div>
            <div class="col-sm-6">
                <h1><blockquote class="border-1-4 border-green-700 text-[50px] mb-[20px] text-yellow-200 hover:bg-yellow-800/50 transition-all delay-20 duration-500 ease-in-out">
                    C++</blockquote></h1>
                    <p  class="leading-[30px]"><strong>
                       C++ is a powerful programming language known for its speed and performance. 
                       It’s widely used in areas where efficiency and fast execution are important—such as 
                       developing operating systems, game engines, and real-time simulations. Because it allows close interaction with hardware, 
                       it gives programmers a lot of control over how the system works behind the scenes, like managing memory directly.

                </strong></p>
                <button class="btn bg-white/0 border-1 border-white">see more <span class="glyphicon glyphicon-menu-right"></span></button>
            </div>
        </div>
    </div>
    
    
    <!--Footer-->
    @include('partials.footer')
</body>
</html>