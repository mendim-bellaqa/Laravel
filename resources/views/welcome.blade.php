<!DOCTYPE html>
<html lang="en">
<title>LARAVEL 8</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

a {
  background-color: red;
  color: white;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
  display: block;
  /* width: 1453px;  */
  position: relative;
}

a:hover {
  background-color: #555;
}

a:active {
  background-color: black;
}

a:visited {
  background-color: #ccc;
} 

</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>LARAVEL<br>LEARNING</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#Services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">SERVICES</a> 
    <a href="#tasks" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">MEMBER TASKS</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>LARAVEL 8 </span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>LARAVEL 8 - BASIC</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>MVC / ROUTES / CONTROLLERS</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="/images/kitchenconcrete.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="/images/livingroom.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="/images/diningroom.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="/images/atrium.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="/images/bedroom.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="/images/livingroom2.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

 <p><a href="{{route('hack', $name)}}" class="btn btn-info btn-xs">Click me</a> 


  <!-- Services -->
  <div class="w3-container" id="Services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>A service is basically just a class that handles one thing (single responsibility), so that the functionality that the class provides, can be reused in multiple other parts of the application. The Registrar service included with Laravel is responsible for registering new users, for example.
       There is no need to extend any core classes, you can just create one and type hint it in controllers for example, so that it'll be resolved out of the service container.
</p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="tasks" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>MEMBER TASKS</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>DAILY TASKS</p>
    <p>Here we can add tasks (Daily tasks) that we should do that day, add user, add deadliine...
    <p><b>Main tasks fort today are:</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/images/team2.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Laravel MVC</h3>
          <p class="w3-opacity">Member 1</p>
          <p>Understand MVC</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/images/team1.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Laravel routes</h3>
          <p class="w3-opacity">Member 2</p>
          <p>Understand Laravel 8 Routes.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/images/team3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Laravel controllers</h3>
          <p class="w3-opacity">Member 3</p>
          <p>Understand laravel controllers.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="about" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>About</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Here are tests after each task that is finished.</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Simple Tasks Cost</li>
        <li class="w3-padding-16">Time</li>
        <li class="w3-padding-16">Working flexibility</li>
        <li class="w3-padding-16">Creativity</li>
        <li class="w3-padding-16">Working fast</li>
        <li class="w3-padding-16">Deadlines</li>
        <li class="w3-padding-16">
          <h2>$ 1999</h2>
          <span class="w3-opacity">per member</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Pro Tasks Cost</li>
        <li class="w3-padding-16">Deadline</li>
        <li class="w3-padding-16">Hours support for team members</li>
        <li class="w3-padding-16">Project menager</li>
        <li class="w3-padding-16">Faster than deadline is</li>
        <li class="w3-padding-16">Experience</li>
        <li class="w3-padding-16">
          <h2>$ 5499</h2>
          <span class="w3-opacity">per project menager</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want te join to our company? If yes please register or contact us...</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://google.com" title="W3.CSS" target="_blank" class="w3-hover-opacity">mendim_bellaqa</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>
