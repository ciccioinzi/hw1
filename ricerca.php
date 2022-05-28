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
    <title>Ricerca brani</title>
    <link rel="stylesheet" href="ricerca.css" />
    <script src="ricerca.js" defer="true"></script>
    <meta data="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav>
      <div id="nome">Spotify-Ricerca brani</div>
      <ul id="links">
        <li><a><?php echo $_SESSION['username']; ?></a></li>
        <li><a href ="home.php">Home</a></li>
        <li><a href ="preferiti.php">Preferiti</a></li>
        <li><a href ="logout.php">Logout</a></li>
      </ul>
    </nav>

    <header>
      <div id="overlay"></div>
      <h1>
        <strong>Effettua la ricerca qui sotto</strong></br>
      </h1>
    </header>
      
    <section>
      <div id="searchbox">
        <form id="spotify">
          Inserisci il titolo di una canzone
          <input type="text" id="song">
          <input type="submit" id="submit" value="Cerca">
        </form>

        <div id="result-view">
          <div id="navigazione"></div>
      </div>
    </section>

  </body>
</html>