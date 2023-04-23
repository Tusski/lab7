<?php
session_start();
if(isset($_POST['submit'])) {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['birthdate'] = $_POST['birthdate'];
  header("Location: quiz.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
</head>
<body>
  <h1>User Registration</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Complete Name: <input type="text" name="name" required><br>
    Email Address: <input type="email" name="email" required><br>
    Birthdate: <input type="date" name="birthdate" required><br>
    <input type="submit" name="submit" value="Register">
  </form>
</body>
</html>