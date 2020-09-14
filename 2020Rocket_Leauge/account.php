<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Account - Rocket Inventory</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rocket Inventory, the best trade website">
  </head>
  <body>
    <div id="container">

      <div id="header">
        <table cellspacing="10" frame="void">
          <tr>
            <td><a href="index.php" >Homepage</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="information.php">Information</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="inventory.php">Inventory</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="trading.php">Trading</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="account.php" class="currentpage">Account</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
          </tr>
        </table>

        <table cellspacing="10" frame="void" style="margin-left:auto; margin-top:auto;">
          <tr>
            <td>  <?php
              if (isset($_SESSION['userId'])) {
                echo '<p class="login-status">Logged In</p>';

              }
              else{
                echo '<p class="login-status">Logged Out</p>';
              }
               ?></td>
          </tr>
        </table>
      </div>


      <div id= "headercontentfooter">
      <div id="title">
          <h1>ACCOUNT</h1>
      </div>

      <div id="content">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        if (isset($_SESSION['userId'])) {
          $conn = mysqli_connect('localhost','root', '', 'loginsystem2020rocketinventory');

          echo "<p> Welcome,&nbsp";
          echo $_SESSION['userUid'];
          echo "! You have &nbsp";
          $query = "SELECT * FROM masterlist WHERE idUsers = {$_SESSION['userId']}";
          $results=mysqli_query($conn, $query);

          $row_count= mysqli_num_rows($results);
          echo $row_count;
          echo '&nbsp items in your inventory.<p> <br> <br>';

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

          echo "</table> <br> <br> <p> Your inventory's total value is: &nbsp";
          echo "$totalValue";
          echo'
          <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
        }
        else{
          echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
        }
         ?>
        </div>
      </div>

      <div id="footer">
          2020 Rocket Inventory cum lmao
      </div>

      <style>
      body {background: url(https://steamuserimages-a.akamaihd.net/ugc/80339917954151566/3CB9761163B46FC5F38B822CCD28E7AE9AEFBAB5/); background size: 100% 100% ;
  background-repeat:repeat;
  background-attachment:fixed;}
  #content {
    font-size: 40px;
    text-align: center;
  }
  .table {
    background: rgba(0, 0, 0, .8);
    font-size: 30px;
    text-align: left;

  }
      </style>
    </div>
  </body>


</html>
