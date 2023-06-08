<!DOCTYPE html>
<html>
    <head>
        <title>
            MY SKILLS
        </title>

        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
  
    <body>
   

      

      <header style="color: blueviolet;"><h1>Pheona Chikwati</h1></header>
      <nav><div class="topnav">
        <ul class ="menu" >
          <li><a href="index.php">HOME</a></li>
          <li><a class="active" href="skills.php">SKILLS</a></li>
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
      
        <P>
            Here are some of the areas am skilled in;
        </P><br>
        <?php
    require_once 'config.php';
$query="SELECT id ,skill_name FROM skills";
$result=mysqli_query($conn,$query);

if(!$result){
  die("Error:".mysqli_error($conn));
}
  ?>
<div>
<?php while($row = mysqli_fetch_assoc($result)) {?>
<div>
<h2 style="size: small"><?php echo $row['skill_name'];?></h2>
</div>
<?php } ?>
</div>

<?php
mysqli_free_result($result);
mysqli_close($conn);
?>
        
       
        
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