<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rocket Inventory, the best trade website">
    <title>Information - Rocket Inventory</title>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="information.php">Information</a></li>
            <li><a href="inventory.php">Inventory</a></li>
            <li class="current"><a href="account.php">Account</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <?php
        if (isset($_SESSION['userId'])) {
          $conn = mysqli_connect('localhost','root', '', 'loginsystem2020rocketinventory');
          echo "<h1>Rocket Inventory User: </h1>";
          echo "<h1> " . $_SESSION['userUid'] . "</h1>";
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

    <section id="main">
      <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "emptyfields") {
            echo '<p class = "signuperror">Fill in all fields!</p>';
          }
          else if ($_GET["error"] == "invaliduidmail") {
            echo '<p class = "signuperror">Invalid username and email!!</p>';
          }
          else if ($_GET["error"] == "invaliduid") {
            echo '<p class = "signuperror">Invalid username!</p>';
          }
          else if ($_GET["error"] == "invalidmail") {
            echo '<p class = "signuperror">Invalid email!</p>';
          }
          else if ($_GET["error"] == "passwordcheck") {
            echo '<p class = "signuperror">Your passwords do not match!</p>';
          }
          else if ($_GET["error"] == "usertaken") {
            echo '<p class = "signuperror">Username already exists!</p>';
          }
        }
        if (isset($_GET['success'])){
          if ($_GET['success'] == "signup") {
            echo '<p class = "signupsuccess">Signup Successful!</p>';
          }
        }
         ?>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
          <input type="text" class="signup" name="uid" placeholder="Username">
          <input type="text" class="signup" name="mail" placeholder="Email">
          <input type="password" class="signup" name="pwd" placeholder="Password">
          <input type="password" class="signup" name="pwd-repeat" placeholder="Repeat Password">
          <button type="submit" class="button_1" name="signup-submit">Signup</button>
        </form>
        </article>

      </div>
    </section>

    <footer>
      <p>Rocket Inventory, Copyright &copy;</p>
    </footer>
  </body>
</html>
