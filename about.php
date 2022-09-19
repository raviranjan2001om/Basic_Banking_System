<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Me - The Sparks Bank</title>

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

  <!-- Link CSS File  -->

  <style>
    <?php include 'style.css'; ?><?php include 'about.css'; ?>
  </style>


  <!-- Link Font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
</head>

<body>
  <nav>
    <div class="logo">
      <img src="img/logo.png" class="logo" />
    </div>
    <ul>
      <li class="link"><a href="index.php" target="_blank">HOME</a></li>
      <li class="link"><a href="about.php">ABOUT ME</a></li>
      <li class="link"><a href="sendMoney.php" target="_blank">SEND MONEY</a></li>
      <li class="link"><a href="allUsers.php" target="_blank">ALL USERS</a></li>
      <li class="link">
        <a href="contact.php" target="_blank">CONTACT ME</a>
      </li>
    </ul>
  </nav>

  <div class="about">
    <h1>About Me</h1>
    <div class="img">
        <img src="img/my.jpg" alt="Ravi">
    </div>
    <p>
      My Name is <span><strong>Raviranjan Kumar</strong></span> <br />
      and This is My intern Project at
      <span><strong>The Sparks Foundation</strong> </span> <br />
      The project is <span><strong>The Banking System</strong></span>.
    </p>
  </div>

  <footer><small>&copy; Copyright 2022, Raviranjan </small></footer>
</body>

</html>