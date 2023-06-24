<!DOCTYPE html>
<html>
<head>
    <title>My Projects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
          position: fixed;
            background-color: blueviolet;
            color: #fff;
            text-align: center;
        }

        nav {
            background-color: #666;
            padding: 10px;
        }

        nav .topnav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav .topnav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav .topnav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        nav .topnav ul li a.active {
            background-color: blueviolet;
        }

        .search-container {
            float: right;
        }

        .search-container input[type="text"] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .search-container button {
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: blueviolet;
            color: #fff;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .projects {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .projects h2 {
            font-size: 20px;
            color: blueviolet;
            margin-bottom: 10px;
            text-align: center;
        }

        .projects .project-item {
            margin-bottom: 10px;
        }

        .projects .project-item h3 {
            font-size: 16px;
            margin-bottom: 5px;
            color: blueviolet;
        }

        .projects .project-item p {
            margin: 0;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .progress-bar {
            width: 100%;
            background-color: #ddd;
            height: 20px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: blueviolet;
        }

        .view-all-projects-btn {
            background-color: blueviolet;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            margin-top: 10px;
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
  
  
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }
  
  
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }
  
  
  .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }
  
  .mySlides {
    display: none;
  }
  
  .cursor {
    cursor: pointer;
  }
  
  
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  img {
    margin-bottom: -4px;
  }
  
  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }
  
  .demo {
    opacity: 0.6;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }
  
  img.hover-shadow {
    transition: 0.3s;
  }
  
  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
  
  
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }
  
  
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }
  
  
  .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }
  
  .mySlides {
    display: none;
  }
  
  .cursor {
    cursor: pointer;
  }
  
  
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  img {
    margin-bottom: -4px;
  }
  
  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }
  
  .demo {
    opacity: 0.6;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }
  
  img.hover-shadow {
    transition: 0.3s;
  }
  
  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
  li{
    display: inline-block;
  }
  * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.active, .dot:hover {
  background-color: #717171;
}

    </style>
</head>

<body>
   
    <nav>
        <div class="topnav">
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="skills.php">SKILLS</a></li>
                <li><a href="contacts.php">CONTACTS</a></li>
                <li><a class="active" href="projects.php">PROJECTS</a></li>
                <div class="search-container">
                    <form action="projects.php" method="GET">
                        <input type="text" placeholder="Search projects" name="search">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </ul>
        </div>
    </nav>

    <div class="projects">
        <h2>My Projects</h2>

        <?php
        require_once 'config.php';
        $conn = getConnection();

        $search = isset($_GET['search']) ? $_GET['search'] : '';

        $query = "SELECT id, name, description, status FROM projects";
        if (!empty($search)) {
            $query .= " WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
        }

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }

        $num_rows = mysqli_num_rows($result);
        ?>

        <?php if ($num_rows > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="project-item">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    
                </div>
            <?php } ?>
            <a class="view-all-projects-btn" href="projects.php">View All Projects</a>
        <?php } else { ?>
            <p>No projects found.</p>
            <a class="view-all-projects-btn" href="projects.php">View All Projects</a>
        <?php } ?>

        <?php
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </div>
    <P> These are some of my projects;</P><br>
        <h2 style="text-align:center">PROJECTS</h2>

        <div class="row">
          <div class="column">
            <img src="cakes.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="designing.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="mobilePhoto.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="frontEnd.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
          </div>
        </div>
        
        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">
        
            <div class="mySlides">
              <div class="numbertext">1 / 4</div>
              <img src="cakes.jpg" style="width:70%">
            </div>
        
            <div class="mySlides">
              <div class="numbertext">2 / 4</div>
              <img src="designing.jpg" style="width:100%">
            </div>
        
            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img src="mobilePhoto.jpg" style="width:100%">
            </div>
            
            <div class="mySlides">
              <div class="numbertext">4 / 4</div>
              <img src="frontEnd.png" style="width:100%">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
            <div class="caption-container">
              <p id="caption"></p>
            </div>
        
        
            <div class="column">
              <img class="demo cursor" src="cakes.jpg" style="width:50%" onclick="currentSlide(1)" alt="CUP CAKES">
            </div>
            <div class="column">
              <img class="demo cursor" src="designing.jpg" style="width:50%" onclick="currentSlide(2)" alt="Graphic disgning">
            </div>
            <div class="column">
              <img class="demo cursor" src="mobilePhoto.jpg" style="width:50%" onclick="currentSlide(3)" alt="Mobile photography of sunset">
            </div>
            <div class="column">
              <img class="demo cursor" src="frontEnd.png" style="width:50%" onclick="currentSlide(4)" alt="Front end developing of a portfolio">
            </div>
          </div>
        </div>
        <script>
        function openModal() {
          document.getElementById("myModal").style.display = "block";
        }
        
        function closeModal() {
          document.getElementById("myModal").style.display = "none";
        }
        
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
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
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
      


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
