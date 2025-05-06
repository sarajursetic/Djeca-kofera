<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Djeca kofera - projektne aktivnosti</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <nav class="navbar-container">
      <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="logo" /></a>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="x-sidebar" onclick="hideSidebar()">
            <a href="#">
              <img
                src="img/xmark.svg"
                alt="x / close window"
                class="xSidebar"
              />
            </a>
          </li>
          <li><a href="index.php">Naslovnica</a></li>
          <li><a href="o_projektu.php">O projektu</a></li>
          <li><a href="projektne_aktivnosti.php">Projektne aktivnosti</a></li>
          <li><a href="o_braku.php">O braku</a></li>
        </ul>
      </div>
      <div class="menu">
        <ul>
          <li><a href="index.php">Naslovnica</a></li>
          <li><a href="o_projektu.php">O projektu</a></li>
          <li><a href="projektne_aktivnosti.php">Projektne aktivnosti</a></li>
           <li><a href="o_braku.php">O braku</a></li> 
        </ul>
      </div>
      <div class="menu1" onclick="sidebar()">
        <a href="#"> <img src="img/menu-icon.svg" alt="menu ikona" /></a>
      </div>
    </nav>
