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
    <title>Home</title>
    <link rel="stylesheet" href="home.css" />
    <script src="home.js" defer="true"></script>
    <meta data="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav>
      <div id="nome">Spotify-Home</div>
      <ul id="links">
        <li><a><?php echo 'Benvenuto '.$_SESSION['username'].''; ?></a></li>
        <li><a href ="ricerca.php">Ricerca</a></li>
        <li><a href ="preferiti.php">Preferiti</a></li>
        <li><a href ="logout.php">Logout</a></li>
      </ul>
    </nav>
    
    <header>
      <div id="overlay"></div>
      <h1>
        <strong>Music for everyone</strong>
      </h1>
    </header>      
    <section>
      <div id="intro">
        <p>Benvenuto in Spotify!</br>
        cerca tutta la musica che vuoi gratuitamente,</br> 
        usa il menù in alto a destra per scegliere cosa fare.</br></p>
      </div>
      <div id="dettagli">
      </div>
    </section> 
</body>
</html>