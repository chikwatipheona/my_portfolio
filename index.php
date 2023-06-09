<!DOCTYPE html>
<html>
<head>
    <title>Pheona's Portifolio</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: blueviolet;
            color: #fff;
            /* padding: 20px; */
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

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .mySlides img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }

        .slide-description {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .slide-description h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .slide-description p {
            margin: 0;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: #fff;
            font-weight: bold;
            font-size: 30px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .dot-container {
            text-align: center;
            padding: 10px;
            background-color: blueviolet;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            cursor: pointer;
        }

        .active {
            background-color: #717171;
        }

        .skills {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .skills h2 {
            font-size: 20px;
            color: blueviolet;
            margin-bottom: 10px;
        }

        .skills .skill-item {
            margin-bottom: 10px;
        }

        .skills .skill-item h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .skills .skill-item p {
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
        }

        .progress-bar-fill {
            height: 100%;
            background-color: blueviolet;
        }

        .view-all-skills-btn {
            background-color: blueviolet;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            margin-top: 10px;
        }

        .profile-photo {
            display: block;
            margin: auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
            margin-top: 20px;
        }

        .background-info {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .background-info h2 {
            font-size: 20px;
            color: blueviolet;
            margin-bottom: 10px;
        }

        .background-info p {
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <!-- <h1>Pheona Chikwati</h1> -->
        <!-- <img src="photo.jpg" alt="Profile Photo" class="profile-photo"> -->
    </header>

    <nav>
        <div class="topnav">
            <ul class="menu">
                <li><a class="active"  href="index.php">HOME</a></li>
                <li><a href="skills.php">SKILLS</a></li>
                <li><a href="contacts.php">CONTACTS</a></li>
                <li><a href="projects.php">PROJECTS</a></li>
                <div class="search-container">
                    <form action="skills.php" method="GET">
                        <input type="text" placeholder="Search skills" name="search">
                        <button type="submit"><i class="fa fa-search">Search</i></button>
                    </form>
                </div>
            </ul>
        </div>
    </nav>

    <div class="background-info">
        <h2>Background Information</h2>
        <h2>Pheona Chikwati</h2>
        <img src="photo.jpg" alt="Profile Photo" class="profile-photo">
       <p>Pheona Chikwati is a young woman who is studying bachelors of Science in Infomation Comunication and Technology at Mzuzu University in her second year.<br>
  She is one of the members of ICTAM that comes from mzuzu University</p>
  <p>
    As an IT personel i'm skilled in programming in c, computer repairing, data analysis with python.......... <button><a href="skills.php">MORE</a></button>
  </p>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="image1.jpg" alt="Image 1">
            <div class="slide-description">
                <h2>Web Development</h2>
                <p>A description of web development skills.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="image2.jpg" alt="Image 2">
            <div class="slide-description">
                <h2>Data Analysis</h2>
                <p>A description of data analysis skills.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="image3.jpg" alt="Image 3">
            <div class="slide-description">
                <h2>Graphic Design</h2>
                <p>A description of graphic design skills.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="image4.jpg" alt="Image 4">
            <div class="slide-description">
                <h2>Graphic Design</h2>
                <p>A description of graphic design skills.</p>
            </div>
        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align: center;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

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
            // Example: Set progress to 75% (change the value as needed)
            updateProgressBar(75, 100);
        </script>
    </div>

    <script>
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
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>

</html>
