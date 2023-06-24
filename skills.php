<!DOCTYPE html>
<html>
<head>
    <title>My Skills</title>
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
    </style>
</head>

<body>
    <nav>
        <div class="topnav">
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a class="active" href="skills.php">SKILLS</a></li>
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

    <div class="skills">
        <h2>My Skills</h2>

        <?php
        require_once 'config.php';
        $conn = getConnection();

        $search = isset($_GET['search']) ? $_GET['search'] : '';

        $query = "SELECT id, skill, description FROM skills";
        if (!empty($search)) {
            $query .= " WHERE skill LIKE '%$search%' OR description LIKE '%$search%'";
        }

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }

        $num_rows = mysqli_num_rows($result);
        ?>

        <?php if ($num_rows > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="skill-item">
                    <h3><?php echo $row['skill']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                </div>
            <?php } ?>
            <a class="view-all-skills-btn" href="skills.php">View All Skills</a>
        <?php } else { ?>
            <p>No skills found.</p>
            <a class="view-all-skills-btn" href="skills.php">View All Skills</a>
        <?php } ?>

        <?php
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
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
            updateProgressBar(75, 100);
        </script>
    </div>
</body>
</html>
