<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rocket Inventory, the best trade website">
    <title>Home Page - Rocket Inventory</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Rocket</span> Inventory</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="information.php">Information</a></li>
            <li><a href="inventory.php">Inventory</a></li>
            <li><a href="account.php">Account</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>Rocket League Inventory Managment</h1>
        <p>The perfect place to build your dream inventory</p>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <?php
        if (isset($_SESSION['userId'])) {
          $conn = mysqli_connect('localhost','root', '', 'loginsystem2020rocketinventory');
          echo "<h1>Rocket Inventory User:&nbsp </h1>";
          echo "<h1>" . $_SESSION['userUid'] . "</h1>";
          echo'
          <form action="includes/logout.inc.php" method="post">
                <button type="submit" class="button_1" name="logout-submit">Logout</button>
            </form>';
        }
        else{
          echo "<h1>Rocket Inventory Account</h1>";
          echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" class="button_1" name="login-submit">Login</button>
            </form>';
        }
         ?>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/information.png">
          <h3>General Information</h3>
          <p>A comprehensive guide to Rocket League trading for beginner players. Our website teachers users safe trading practices, gives tips to build up your inventory, and general information on how to start trading.</p>
        </div>
        <div class="box">
          <img src="./img/trading.png">
          <h3>Item Trading</h3>
          <p>Trade with other user on our website to practice in game trading. With no risk, you can practice trading with other players and keep track of your total inventory vaule.</p>
        </div>
        <div class="box">
          <img src="./img/inventory.png">
          <h3>Inventory Managment</h3>
          <p>Make an account, and manage your inventory. Including every item in the game, our site allows you to create your dream inventory. Keep track of items, colors, and certifications to become a professional Rocket League trader.</p>
        </div>
      </div>
    </section>

    <footer>
      <p>Rocket Inventory, Copyright &copy;</p>
    </footer>
  </body>
</html>
