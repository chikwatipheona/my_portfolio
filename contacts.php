<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
    </head>
    <link rel="stylesheet" href="styles.css">
    <body>
    </head>
    <body>
      <header style="color: blueviolet;"><h1>Pheona Chikwati</h1></header>
      <nav><div class="topnav">
        <ul class ="menu" >
          <li><a href="index.php">HOME</a></li>
          <li><a href="skills.php">SKILLS</a></li>
          <li><a class="active" href="contacts.php">CONTACTS</a></li>
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
        <header style="color: blueviolet;"><h1>Contacts</h1></header> 
        <h3>
            FOR BOOKINGS
        </h3>
        <P>
            Please fill in the form bellow
        </P>
        
        <form id="frm1">Full Name: <input type="text" name="fname"><br>
            Phone: <input type="text" name="fname"><br>
            Service wanted: <select id="mySelect">
                <option>BAKINGS</option>
                <option>GRAPHIC DESIGN</option>
                <option>PC REPAIRING</option>
                <option>FRONT END DESIGNIGN</option>
                <option>MOBILE PHOTOHRAPHY</option>
              </select><br>
        </form>
        <button onclick="myFunction()">submit</button>

        <p id="mybutton"></p>
        
        <script>
        function myFunction() {
          var txt;
          if (confirm("Are you sure you want to submit?")) {
            txt = "sent!";
          } else {
            txt = "canceled!";
          }
          document.getElementById("mybutton").innerHTML = txt;
        }
        </script>
        <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $number = $_POST["number"];
        $email = $_POST["email"];

        $sql = "INSERT INTO contacts (Name, Number, email) VALUES ('$name', '$number', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<p class='message success'>Data saved successfully!</p>";
        } else {
            echo "<p class='message error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>  
    
    </body>
</html>
    