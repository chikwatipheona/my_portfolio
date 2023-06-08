<!DOCTYPE html>
<html>
    <head>
        <title>
            MY SKILLS
        </title>

        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
  
    <body>
   <style>
    *{background-color: rgb(192, 209, 225);}
    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:pink;
    color: white;
    text-align: center;
 }
 .progress-bar {
    width: 100%;
    height: 20px;
    border: 1px solid #fffdfd;
  }

  .progress-bar-fill {
    height: 100%;
    background-color: rgb(204, 143, 186);
  }
  * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: inline;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #6e1919;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #a95d5d;
}
body {
    font-family: Verdana, sans-serif;
    margin: 0;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .row > .column {
    padding: 0 8px;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  .column {
    float: left;
    width: 25%;
  }

   </style>

      

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