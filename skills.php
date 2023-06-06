<!DOCTYPE html>
<html>
    <head>
        <title>
            MY SKILLS
        </title>
    </head>
    <link rel="stylesheet" href="styles.css">
    <body>
    </head>
    <body>
      <header style="color: blueviolet;"><h1>Pheona Chikwati</h1></header>
      <nav><div class="topnav">
        <ul class ="menu" >
          <li><a href="index.html">HOME</a></li>
          <li><a class="active" href="skills.html">SKILLS</a></li>
          <li><a href="contacts.html">CONTACTS</a></li>
          <li><a href="projects.html">PROJECTS</a></li>
          <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
      
          </ul>
          </div>
      </nav>
      
        <P>
            Here are some of the areas am skilled in;
        </P><br>
        <li>-Mobile photography and editing</li><br>
        <li>-Front end developing</li><br>
        <li>-Baking cakes and making snacks</li><br>
        <li>-Graphic disgning</li><br>
        <li>-PC repairing </li>
        
       
        
            </style>
            <div class="footer">
                
                  <h1>MY PROGRESS</h1>
            
                  <div class="progress-bar">
                    <div class="progress-bar-fill" id="progress"></div>
                  </div>
                
                  <script>
                    
                    function updateProgressBar(value, max) {
                      var progressElement = document.getElementById('progress');
                      var progressWidth = (value / max) * 100;
                      progressElement.style.width = progressWidth + '%';
                    }
                    updateProgressBar(75, 100);
                  </script>     
            
            </div>
        
        
    </body>    
</html>