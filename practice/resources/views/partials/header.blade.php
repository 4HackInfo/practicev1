
@vite('resources/js/app.js')
<div class="navbar navbar-inverse mt-[0]">
    <div class="navbar-fluid">
      <div class="navbar-header">
        <a href="/" class="navbar-brand">Andiason.</a>
      </div>

      <div class="flex justify-center">
      <ul class="nav navbar-nav ">
        <li><a href="programming">Programming</a></li>
        <li><a href="services">Services</a></li>
        <li><a href="framework">Framework</a></li>
        <li><a href="about">About Me</a></li>
        </ul>
          
        <ul class="nav navbar-nav w-[10%] flex justify-end object-center">
           <ul class="btn-group">
              <a href="#" class="dropdown-toggle dropdown-menu-right" data-toggle="dropdown"><span class="glyphicon glyphicon-picture mt-[15px] text-[20px]"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Wallpaper</li>
                <li><a href="#" onclick="changeBackground('anime1.jpg'); return false;">Kakashi</a></li>
                <li><a href="#" onclick="changeBackground('background3.jpg'); return false;">Itachi</a></li>
                 <li><a href="#" onclick="changeBackground('background2.jpg'); return false;">default</a></li>
              </ul>
            </ul>
          </ul>

           <ul class="nav navbar-nav absolute right-[20px]">
          <li><a href="#">SignUp <i class="glyphicon glyphicon-user"></i></a></li>
          <li><a href="#">Logout <i class="glyphicon glyphicon-log-out"></i></a></li>
          </ul>
   
      
        </div>

     
    </div>
  </div>
  