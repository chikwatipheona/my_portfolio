<!DOCTYPE html>
<html>
<head>
  <title>Contacts</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #333;
      color: #fff;
      text-align: center;
    }

    .navigation {
      background-color: #666;
      padding: 10px;
    }

    .navigation ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navigation ul li {
      display: inline-block;
      margin-right: 10px;
    }

    .navigation ul li a {
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
    }

    .navigation ul li a:hover {
      background-color: #999;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    form input,
    form select,
    form textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    form button {
      background-color: blueviolet;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    #statusMessage {
      margin-top: 10px;
      color: green;
      text-align: center;
    }
  </style>
</head>
<body>
  
  <div class="navigation">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="skills.php">SKILLS</a></li>
      <li><a class="active"  href="contacts.php">CONTACTS</a></li>
      <li><a href="projects.php">PROJECTS</a></li>
    </ul>
  </div>

  <div class="container">
    <h2>Contacts</h2>

    <h3>FOR BOOKINGS</h3>
    <p>Please fill in the form below</p>

    <?php
    $statusMessage = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // getting data from a form 
      $name = $_POST["fullname"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
      $service = $_POST["service"];
      $message = $_POST["message"];
  
      require_once 'config.php';
  
      $conn = getConnection();
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
  
      $sql = "INSERT INTO booking (name, phone, email, service, message) VALUES (?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sssss", $name, $phone, $email, $service, $message);
  
      if ($stmt->execute()) {
          $statusMessage = 'Data saved successfully!';
      } else {
          $statusMessage = 'Error saving data. Please try again.';
      }
  
      $stmt->close();
      $conn->close();
  }
  
    ?>

    <form method="POST">
      <div>
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>

      <div>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
      </div>

      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div>
        <label for="service">Service Wanted:</label>
        <select id="service" name="service">
          <option value="BAKINGS">BAKINGS</option>
          <option value="GRAPHIC DESIGN">GRAPHIC DESIGN</option>
          <option value="PC REPAIRING">PC REPAIRING</option>
          <option value="FRONT END DESIGNING">FRONT END DESIGNING</option>
          <option value="MOBILE PHOTOGRAPHY">MOBILE PHOTOGRAPHY</option>
        </select>
      </div>
  
      <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>

      <button type="submit">Submit</button>
    </form>

    <p id="statusMessage"><?php echo $statusMessage; ?></p>
  </div>
</body>
</html>
