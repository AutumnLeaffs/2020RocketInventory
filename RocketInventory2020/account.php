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

    

    <section id="main">

      <div class="container">

          <h1 class="page-title">Account</h1>

          <?php
          if (!isset($_SESSION['userId'])) {
            $conn = mysqli_connect('localhost','root', '', 'loginsystem2020rocketinventory');

            echo'
            <h2 class="page-title"> <br> Welcome! Here you will be able to see all of your items after you have logged in. <h2>
            <section id="wrapper"">
              <div id ="left">
                <p>New to Rocket Inventory? Make an account!<p>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                  <input type="text" class="signup" name="uid" placeholder="Username">
                  <br>
                  <br>
                  <input type="text" class="signup" name="mail" placeholder="Email">
                  <br>
                  <br>
                  <input type="password" class="signup" name="pwd" placeholder="Password">
                  <br>
                  <br>
                  <input type="password" class="signup" name="pwd-repeat" placeholder="Repeat Password">
                  <br> <br>
                  <button type="submit" class="button_1" name="signup-submit">Signup</button>
                </form>
                </div>

                <div id ="right">
                  <p>Already have an account? Log in!<p>
                  <br>
                  <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username...">
                        <br><br>
                        <input type="password" name="pwd" placeholder="Password...">
                        <br><br>
                        <button type="submit" class="button_1" name="login-submit">Login</button>
                    </form>
                  </div>
            ';
          }

           ?>




          <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        if (isset($_SESSION['userId'])) {
          $conn = mysqli_connect('localhost','root', '', 'loginsystem2020rocketinventory');

          echo "<p> Welcome,&nbsp";
          echo $_SESSION['userUid'];
          echo "! You have&nbsp";
          $query = "SELECT * FROM masterlist WHERE idUsers = {$_SESSION['userId']}";
          $results=mysqli_query($conn, $query);

          $row_count= mysqli_num_rows($results);
          echo $row_count;
          echo '&nbspitems in your inventory.<p> <br> <br>';

          echo "<table class='table'>";
          $totalValue = 0;
          while ($row_myItems = mysqli_fetch_array($results)) {
              //output a row here
              if ($row_myItems['specialEdition'] == 1)
                $sped = "Special Edition";
              else {
                $sped = "";
              }
              echo "<tr><td>".($row_myItems['itemName'])."</td>
                    <td>".($row_myItems['type'])."</td>
                    <td>".($row_myItems['paint'])."</td>
                    <td>".($row_myItems['certification'])."</td>
                    <td>".($row_myItems['rarity'])."</td>
                    <td>".($sped)."</td>
                    <td>".($row_myItems['price'])."</td>
                    <td> <form action='includes/deleteitem.inc.php' method='post'> <input name = 'delete' type = 'submit'
                       id = 'delete' value = 'Delete'>


                       <input type='hidden' name='type' value='Body'>
                       <input type='hidden' name='specialEdition' value='0'>
                      <input type='hidden' name='itemName' value='".$row_myItems['itemName']."'>
                       </form>
                       </td></tr>";
                       $totalValue += $row_myItems['price'];
          }

          echo "</table> <br> <br> <p> Your inventory's total value is:&nbsp";
          echo "$totalValue";
          echo " credits";
        }

         ?>
        </article>

      </div>
    </section>

    <footer>
      <p>Rocket Inventory, Copyright &copy;</p>
    </footer>
  </body>
</html>
