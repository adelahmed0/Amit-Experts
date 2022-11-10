<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <a href="" class="logo">Cars</a>
        <ul class="main-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="admin.php">Admin</a></li>
    <?php
    if (isset($_SESSION['username'])) {
    ?>
          <li><a href="logout.php">Logout</a></li>
    <?php } ?>
        </ul>
      </div>
    </div>
    <?php
    if (!isset($_SESSION['username'])) {
    ?>
    <form id="login-form">
      <h3>login</h3>
      <input type="text" name="username" />
      <input type="password" name="password" />
      <input type="submit" value="submit" />
    </form>
         <?php } ?>
  </body>
</html>
