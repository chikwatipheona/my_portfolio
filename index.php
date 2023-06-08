<!DOCTYPE html>
<html>
 <head>
   <title>Pheona's Portfolio</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 <meta charset="utf-8">
 
 <link rel="stylesheet" href="styles.css">
 <body>
   Welcome to my portfolio.
   <p id="greet" style="color: rgb(6, 57, 2); font-size: xx-large;" ></p>
     <script>
      const time = new Date().getHours();
      let greeting;
      if (time < 11){
        greeting= "Good Morning";
      }
      else if (time<18){
        greeting= "Good Day";
      }
      else{
        greeting= "Good Evening";
      }
      document.getElementById("greet").innerHTML=greeting
     </script>
     
 <p>

    <header style="color: blueviolet;"><h1>Pheona Chikwati</h1></header>
      <nav><div class="topnav">
        <ul class ="menu" >
          <li><a class="active" href="index.php">HOME</a></li>
          <li><a href="skills.php">SKILLS</a></li>
          <li><a href="contacts.php">CONTACTS</a></li>
          <li><a href="projects.php">PROJECTS</a></li>
          <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
      
          </ul>
          </div>
      </nav>
     
  <style>
    img{
      border: 5px solid #333;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
  <img src="meee.jpg" width="300" height="200" class="center"><br>
  Pheona Chikwati is a young woman who is studying bachelors of Science in Infomation Comunication and Technology at Mzuzu University in her second year.<br>
  She is one of the members of ICTAM that comes from mzuzu University</p>
  <p>
    As an IT personel i'm skilled in programming in c, computer repairing, data analysis with python.......... <button><a href="skills.html">MORE</a></button>
  </p>

   </div>
   <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="graphics.jpg" style="width:100%">
      <div class="text">GRAPHIC DISGNIGN</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="cakes.jpg" style="width:100%">
      <div class="text">BAKINGS</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="myPort.png" style="width:100%">
      <div class="text">FRONT END DEVELOPING</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="photography.jpg" style="width:100%">
      <div class="text">MOBILE PHOTOHRAPHY</div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
  
    <div class="footer">
      <li><img src="instagram.png"></li>
      <li><img src="linkedin.png"></li>
      <li><img src="pinterest.png"></li>
      <li><img src="telegramApp.png"></li>
    
    </div>
 
 </body>
</html>