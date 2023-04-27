<?php 
  include('Admin Panel\admin\db_connect.php'); 

  if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password before storing in database

    // Set default user type to patient
    $type = 3;

    // Prepare and execute SQL statement to insert user data
    $stmt = $conn->prepare("INSERT INTO users (doctor_id, name, address, contact, username, password, type) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssi", $doctor_id, $name, $address, $contact, $username, $password, $type);

    // Set doctor_id to NULL since it's not specified in the form
    $doctor_id = NULL;

    if($stmt->execute()) {
      echo "User registered successfully";
    } else {
      echo "Error registering user: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
  }
?>

<form method="POST" action="">
  <label>Name</label>
  <input type="text" name="name" required>

  <label>Address</label>
  <textarea name="address" required></textarea>

  <label>Contact</label>
  <input type="text" name="contact" required>

  <label>Username</label>
  <input type="text" name="username" required>

  <label>Password</label>
  <input type="password" name="password" required>

  <input type="submit" name="register" value="Register">
</form>
