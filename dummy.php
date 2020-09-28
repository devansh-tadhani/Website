<html>
<body>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "signup";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO sign_in (email, password)
  VALUES ('echo $_POST["email"]', 'echo $_POST["password"]')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>

<!-- Welcome <?php echo $_POST["password"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?> -->

</body>
</html>
