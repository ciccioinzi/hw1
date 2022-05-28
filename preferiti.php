<?php
  session_start();
  
  if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
  }
?>

<html>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
  ?>
  <head>
    <meta charset="utf-8">
    <title>Preferiti</title>
    <link rel="stylesheet" href="preferiti.css" />
    <script src="preferiti.js" defer="true"></script>
    <meta data="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav>
      <div id="nome">Spotify-Brani preferiti</div>
      <ul id="links">
        <li><a><?php echo $_SESSION['username']; ?></a></li>
        <li><a href ="home.php">Home</a></li>
        <li><a href ="ricerca.php">Ricerca</a></li>
        <li><a href ="logout.php">Logout</a></li>
      </ul>
    </nav>

    <header>
      <div id="overlay"></div>
      <h1>
        <strong>Visualizza qui i tuoi brani preferiti</strong></br>
      </h1>
    </header>
      
    <section>
      <div id="preferiti">
        <h1>I tuoi brani preferiti</h1>
        <div id="preferiti-view"></div>
      </div>
    </section>