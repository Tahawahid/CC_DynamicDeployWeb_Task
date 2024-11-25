<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple PHP Website</title>
</head>

<body>
  <h1>Welcome to the Simple PHP Website</h1>
  <form action="" method="POST">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Submit</button>
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    echo "<h2>Welcome, $name!</h2>";
  }
  ?>
</body>

</html>