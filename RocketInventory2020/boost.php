<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rocket Inventory, the best trade website">
    <title>Inventory - Rocket Inventory</title>
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
            <li class="current"><a href="inventory.php">Inventory</a></li>
            <li><a href="account.php">Account</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <?php
        if (isset($_SESSION['userId'])) {
          $conn = mysqli_connect('localhost','root', '', 'loginsystem2020rocketinventory');
          echo "<h1>Rocket Inventory User:&nbsp </h1>";
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
        <div id= "subHeader">
         <h5>
          <table id="table1" cellspacing="10" frame="void">
            <tr>
              <td><a href="inventory.php">Bodies</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="decal.php">Decals</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="paint.php">Paints</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="wheel.php">Wheels</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="boost.php" class="currentpage">Boosts</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="topper.php">Toppers</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="goalexplosion.php">Goal Explosions</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="trail.php">Trails</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="banner.php">Banners</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            </tr>
          </table>
        </h5>
      </div>

    <div id="content">
      <form action="includes/items.inc.php" method="post">
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  color:black;
  width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

#RocketBoost {
max-width:200px;
margin-top: -100px;
}
#RocketBoost:hover #selectColor1  {
  display: block;
  position:relative;
}
#RocketBoost:hover #selectCert1  {
  display: block;
  position: relative;

}
#RocketBoost:hover #submit1  {
  display: block;
  position: relative;

}
#selectColor1:hover #tColor1 {
  display: block;
  left:230px;
  top:-1px;
}
#selectCert1:hover #tCert1 {
  display: block;
  left:230px;
  top:-1px;
}
.itemBigContainer {
  display: grid;
  grid-template-rows: 200px;
  grid-gap: 100px;
  width:70%;
  margin-left:15%;
  margin-right:15%;
}
.itemContainer {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
  column-width:auto;
  grid-template-rows: 200px;
  grid-gap: 50px;
  margin-top: 10px;
}

button{
  background-color:#e8491d

}
#subHeader{
  font-family: futura, fantasy, sans-serif;
  font-size: 40px;
  font-weight: bolder;
}
footer{
  color:black;
  background-color: #f4f4f4;
  height: 400px;
  align: center;


}
</style>

<section class="itemBigContainer">
<section class="itemContainer">

  <div id="RocketBoost" class ="one">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Blamite Overthruster" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b2/Blamite_Overthruster_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180102193907" height = 220px width = 220px> <p>Blamite Overthruster</p></button>

              <div id="selectColor1" class = "dropdown-content">
              <p>Color</p>
              <div id="tColor1" class="dropdown-content">
                <input type="radio" id="Lime" name="paint" value="Lime">
                <label for="Lime">Lime</label><br>
                <input type="radio" id="Black" name="paint" value="Black">
                <label for="Black">Black</label><br>
                <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
                <label for="Burnt Sienna">Burnt Sienna</label><br>
                <input type="radio" id="Cobalt" name="paint" value="Cobalt">
                <label for="Cobalt">Cobalt</label><br>
                <input type="radio" id="Forest Green" name="paint" value="Forest Green">
                <label for="Forest Green">Forest Green</label><br>
                <input type="radio" id="Grey" name="paint" value="Grey">
                <label for="Grey">Grey</label><br>
                <input type="radio" id="Orange" name="paint" value="Orange">
                <label for="Orange">Orange</label><br>
                <input type="radio" id="Pink" name="paint" value="Pink">
                <label for="Pink">Pink</label><br>
                <input type="radio" id="Purple" name="paint" value="Purple">
                <label for="Purple">Purple</label><br>
                <input type="radio" id="Saffron" name="paint" value="Saffron">
                <label for="Saffron">Saffron</label><br>
                <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
                <label for="Sky Blue">Sky Blue</label><br>
                <input type="radio" id="Titanium White" name="paint" value="Titanium White">
                <label for="Titanium White">Titanium White</label><br>
                <input type="radio" id="Crimson" name="paint" value="Crimson">
                <label for="Crimson">Crimson</label><br>
              </div>

             </div>
              <div id="selectCert1" class = "dropdown-content">
                <p>Certification</p>
                <div id="tCert1" class="dropdown-content">
                  <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                  <label for="Acrobat">Acrobat</label><br>
                  <input type="radio" id="Aviator" name="certification"value="Aviator">
                  <label for="Aviator">Aviator</label><br>
                  <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                  <label for="Goalkeeper">Goalkeeper</label><br>
                  <input type="radio" id="Guardian" name="certification"value="Guardian">
                  <label for="Guardian">Guardian</label><br>
                  <input type="radio" id="Juggler" name="certification"value="Juggler">
                  <label for="Juggler">Juggler</label><br>
                  <input type="radio" id="Paragon" name="certification"value="Paragon">
                  <label for="Paragon">Paragon</label><br>
                  <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                  <label for="Playmaker">Playmaker</label><br>
                  <input type="radio" id="Scorer" name="certification"value="Scorer">
                  <label for="Scorer">Scorer</label><br>
                  <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                  <label for=">Show-Off">Show-Off</label><br>
                  <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                  <label for=">Sniper">Sniper</label><br>
                  <input type="radio" id=">Striker" name="certification"value=">Striker">
                  <label for=">Striker">Striker</label><br>
                  <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                  <label for=">Sweeper">Sweeper</label><br>
                  <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                  <label for=">Tactician">Tactician</label><br>
                  <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                  <label for=">Turtle">Turtle</label><br>
                  <input type="radio" id=">Victor" name="certification"value=">Victor">
                  <label for=">Victor">Victor</label><br>
                </div>
              </div>



        <input type="hidden" name="price" value="0">
        <input type="hidden" name="rarity" value="Common">
        <input type="hidden" name="type" value="Rocket Boost">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Blamite Overthruster">

  </form>
  </div>

  <div id="RocketBoost" class ="two">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Bubbles" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRN88S6OcXwqpALd3c7OY8d3pNLoJKlVCRnGIVjn7jBd-04PM27vp274mOE9ZIc47hpg7x-Tilbim4T/pub?w=134&h=133" height = 220px width = 220px> <p>Bubbles</p></button>

              <div id="selectColor1" class = "dropdown-content">
              <p>Color</p>
              <div id="tColor1" class="dropdown-content">
                <input type="radio" id="Lime" name="paint" value="Lime">
                <label for="Lime">Lime</label><br>
                <input type="radio" id="Black" name="paint" value="Black">
                <label for="Black">Black</label><br>
                <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
                <label for="Burnt Sienna">Burnt Sienna</label><br>
                <input type="radio" id="Cobalt" name="paint" value="Cobalt">
                <label for="Cobalt">Cobalt</label><br>
                <input type="radio" id="Forest Green" name="paint" value="Forest Green">
                <label for="Forest Green">Forest Green</label><br>
                <input type="radio" id="Grey" name="paint" value="Grey">
                <label for="Grey">Grey</label><br>
                <input type="radio" id="Orange" name="paint" value="Orange">
                <label for="Orange">Orange</label><br>
                <input type="radio" id="Pink" name="paint" value="Pink">
                <label for="Pink">Pink</label><br>
                <input type="radio" id="Purple" name="paint" value="Purple">
                <label for="Purple">Purple</label><br>
                <input type="radio" id="Saffron" name="paint" value="Saffron">
                <label for="Saffron">Saffron</label><br>
                <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
                <label for="Sky Blue">Sky Blue</label><br>
                <input type="radio" id="Titanium White" name="paint" value="Titanium White">
                <label for="Titanium White">Titanium White</label><br>
                <input type="radio" id="Crimson" name="paint" value="Crimson">
                <label for="Crimson">Crimson</label><br>
              </div>

             </div>
              <div id="selectCert1" class = "dropdown-content">
                <p>Certification</p>
                <div id="tCert1" class="dropdown-content">
                  <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                  <label for="Acrobat">Acrobat</label><br>
                  <input type="radio" id="Aviator" name="certification"value="Aviator">
                  <label for="Aviator">Aviator</label><br>
                  <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                  <label for="Goalkeeper">Goalkeeper</label><br>
                  <input type="radio" id="Guardian" name="certification"value="Guardian">
                  <label for="Guardian">Guardian</label><br>
                  <input type="radio" id="Juggler" name="certification"value="Juggler">
                  <label for="Juggler">Juggler</label><br>
                  <input type="radio" id="Paragon" name="certification"value="Paragon">
                  <label for="Paragon">Paragon</label><br>
                  <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                  <label for="Playmaker">Playmaker</label><br>
                  <input type="radio" id="Scorer" name="certification"value="Scorer">
                  <label for="Scorer">Scorer</label><br>
                  <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                  <label for=">Show-Off">Show-Off</label><br>
                  <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                  <label for=">Sniper">Sniper</label><br>
                  <input type="radio" id=">Striker" name="certification"value=">Striker">
                  <label for=">Striker">Striker</label><br>
                  <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                  <label for=">Sweeper">Sweeper</label><br>
                  <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                  <label for=">Tactician">Tactician</label><br>
                  <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                  <label for=">Turtle">Turtle</label><br>
                  <input type="radio" id=">Victor" name="certification"value=">Victor">
                  <label for=">Victor">Victor</label><br>
                </div>
              </div>



        <input type="hidden" name="price" value="0">
        <input type="hidden" name="rarity" value="Common">
        <input type="hidden" name="type" value="Rocket Boost">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Bubbles">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Confetti" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQOW7_0s86fy7tUKLKpD-JqLpL1nTbH3Kw7vn-QyrWpGgoWEgoee9zn8Lm7tc3djFv1ro6QJB4LNb58/pub?w=133&h=134" height = 220px width = 220px> <p>Confetti</p></button>

              <div id="selectColor1" class = "dropdown-content">
              <p>Color</p>
              <div id="tColor1" class="dropdown-content">
                <input type="radio" id="Lime" name="paint" value="Lime">
                <label for="Lime">Lime</label><br>
                <input type="radio" id="Black" name="paint" value="Black">
                <label for="Black">Black</label><br>
                <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
                <label for="Burnt Sienna">Burnt Sienna</label><br>
                <input type="radio" id="Cobalt" name="paint" value="Cobalt">
                <label for="Cobalt">Cobalt</label><br>
                <input type="radio" id="Forest Green" name="paint" value="Forest Green">
                <label for="Forest Green">Forest Green</label><br>
                <input type="radio" id="Grey" name="paint" value="Grey">
                <label for="Grey">Grey</label><br>
                <input type="radio" id="Orange" name="paint" value="Orange">
                <label for="Orange">Orange</label><br>
                <input type="radio" id="Pink" name="paint" value="Pink">
                <label for="Pink">Pink</label><br>
                <input type="radio" id="Purple" name="paint" value="Purple">
                <label for="Purple">Purple</label><br>
                <input type="radio" id="Saffron" name="paint" value="Saffron">
                <label for="Saffron">Saffron</label><br>
                <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
                <label for="Sky Blue">Sky Blue</label><br>
                <input type="radio" id="Titanium White" name="paint" value="Titanium White">
                <label for="Titanium White">Titanium White</label><br>
                <input type="radio" id="Crimson" name="paint" value="Crimson">
                <label for="Crimson">Crimson</label><br>
              </div>

             </div>
              <div id="selectCert1" class = "dropdown-content">
                <p>Certification</p>
                <div id="tCert1" class="dropdown-content">
                  <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                  <label for="Acrobat">Acrobat</label><br>
                  <input type="radio" id="Aviator" name="certification"value="Aviator">
                  <label for="Aviator">Aviator</label><br>
                  <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                  <label for="Goalkeeper">Goalkeeper</label><br>
                  <input type="radio" id="Guardian" name="certification"value="Guardian">
                  <label for="Guardian">Guardian</label><br>
                  <input type="radio" id="Juggler" name="certification"value="Juggler">
                  <label for="Juggler">Juggler</label><br>
                  <input type="radio" id="Paragon" name="certification"value="Paragon">
                  <label for="Paragon">Paragon</label><br>
                  <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                  <label for="Playmaker">Playmaker</label><br>
                  <input type="radio" id="Scorer" name="certification"value="Scorer">
                  <label for="Scorer">Scorer</label><br>
                  <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                  <label for=">Show-Off">Show-Off</label><br>
                  <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                  <label for=">Sniper">Sniper</label><br>
                  <input type="radio" id=">Striker" name="certification"value=">Striker">
                  <label for=">Striker">Striker</label><br>
                  <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                  <label for=">Sweeper">Sweeper</label><br>
                  <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                  <label for=">Tactician">Tactician</label><br>
                  <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                  <label for=">Turtle">Turtle</label><br>
                  <input type="radio" id=">Victor" name="certification"value=">Victor">
                  <label for=">Victor">Victor</label><br>
                </div>
              </div>



        <input type="hidden" name="price" value="0">
        <input type="hidden" name="rarity" value="Common">
        <input type="hidden" name="type" value="Rocket Boost">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Confetti">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Datastream" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSnqMbE-mfOWOzryRer2wUsoc_NbTJRIPof4iU0y8L6Ui5kvlsoXwkGX34zF6pDW4KvaHAGMmZjvYoz/pub?w=135&h=134" height = 220px width = 220px> <p>Datastream</p></button>

              <div id="selectColor1" class = "dropdown-content">
              <p>Color</p>
              <div id="tColor1" class="dropdown-content">
                <input type="radio" id="Lime" name="paint" value="Lime">
                <label for="Lime">Lime</label><br>
                <input type="radio" id="Black" name="paint" value="Black">
                <label for="Black">Black</label><br>
                <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
                <label for="Burnt Sienna">Burnt Sienna</label><br>
                <input type="radio" id="Cobalt" name="paint" value="Cobalt">
                <label for="Cobalt">Cobalt</label><br>
                <input type="radio" id="Forest Green" name="paint" value="Forest Green">
                <label for="Forest Green">Forest Green</label><br>
                <input type="radio" id="Grey" name="paint" value="Grey">
                <label for="Grey">Grey</label><br>
                <input type="radio" id="Orange" name="paint" value="Orange">
                <label for="Orange">Orange</label><br>
                <input type="radio" id="Pink" name="paint" value="Pink">
                <label for="Pink">Pink</label><br>
                <input type="radio" id="Purple" name="paint" value="Purple">
                <label for="Purple">Purple</label><br>
                <input type="radio" id="Saffron" name="paint" value="Saffron">
                <label for="Saffron">Saffron</label><br>
                <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
                <label for="Sky Blue">Sky Blue</label><br>
                <input type="radio" id="Titanium White" name="paint" value="Titanium White">
                <label for="Titanium White">Titanium White</label><br>
                <input type="radio" id="Crimson" name="paint" value="Crimson">
                <label for="Crimson">Crimson</label><br>
              </div>

             </div>
              <div id="selectCert1" class = "dropdown-content">
                <p>Certification</p>
                <div id="tCert1" class="dropdown-content">
                  <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                  <label for="Acrobat">Acrobat</label><br>
                  <input type="radio" id="Aviator" name="certification"value="Aviator">
                  <label for="Aviator">Aviator</label><br>
                  <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                  <label for="Goalkeeper">Goalkeeper</label><br>
                  <input type="radio" id="Guardian" name="certification"value="Guardian">
                  <label for="Guardian">Guardian</label><br>
                  <input type="radio" id="Juggler" name="certification"value="Juggler">
                  <label for="Juggler">Juggler</label><br>
                  <input type="radio" id="Paragon" name="certification"value="Paragon">
                  <label for="Paragon">Paragon</label><br>
                  <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                  <label for="Playmaker">Playmaker</label><br>
                  <input type="radio" id="Scorer" name="certification"value="Scorer">
                  <label for="Scorer">Scorer</label><br>
                  <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                  <label for=">Show-Off">Show-Off</label><br>
                  <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                  <label for=">Sniper">Sniper</label><br>
                  <input type="radio" id=">Striker" name="certification"value=">Striker">
                  <label for=">Striker">Striker</label><br>
                  <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                  <label for=">Sweeper">Sweeper</label><br>
                  <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                  <label for=">Tactician">Tactician</label><br>
                  <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                  <label for=">Turtle">Turtle</label><br>
                  <input type="radio" id=">Victor" name="certification"value=">Victor">
                  <label for=">Victor">Victor</label><br>
                </div>
              </div>



        <input type="hidden" name="price" value="0">
        <input type="hidden" name="rarity" value="Common">
        <input type="hidden" name="type" value="Rocket Boost">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Datastream">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Flamethrower" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vT8NjduY8ZT9dgbMIp4HZlORg7JUt7X2an8XQgzxwYmCgw3mzRwcMbSyjGj2ctA20xJ1VR_fuUMJdGw/pub?w=219&h=219" height = 220px width = 220px> <p>Flamethrower</p></button>

              <div id="selectColor1" class = "dropdown-content">
              <p>Color</p>
              <div id="tColor1" class="dropdown-content">
                <input type="radio" id="Lime" name="paint" value="Lime">
                <label for="Lime">Lime</label><br>
                <input type="radio" id="Black" name="paint" value="Black">
                <label for="Black">Black</label><br>
                <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
                <label for="Burnt Sienna">Burnt Sienna</label><br>
                <input type="radio" id="Cobalt" name="paint" value="Cobalt">
                <label for="Cobalt">Cobalt</label><br>
                <input type="radio" id="Forest Green" name="paint" value="Forest Green">
                <label for="Forest Green">Forest Green</label><br>
                <input type="radio" id="Grey" name="paint" value="Grey">
                <label for="Grey">Grey</label><br>
                <input type="radio" id="Orange" name="paint" value="Orange">
                <label for="Orange">Orange</label><br>
                <input type="radio" id="Pink" name="paint" value="Pink">
                <label for="Pink">Pink</label><br>
                <input type="radio" id="Purple" name="paint" value="Purple">
                <label for="Purple">Purple</label><br>
                <input type="radio" id="Saffron" name="paint" value="Saffron">
                <label for="Saffron">Saffron</label><br>
                <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
                <label for="Sky Blue">Sky Blue</label><br>
                <input type="radio" id="Titanium White" name="paint" value="Titanium White">
                <label for="Titanium White">Titanium White</label><br>
                <input type="radio" id="Crimson" name="paint" value="Crimson">
                <label for="Crimson">Crimson</label><br>
              </div>

             </div>
              <div id="selectCert1" class = "dropdown-content">
                <p>Certification</p>
                <div id="tCert1" class="dropdown-content">
                  <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                  <label for="Acrobat">Acrobat</label><br>
                  <input type="radio" id="Aviator" name="certification"value="Aviator">
                  <label for="Aviator">Aviator</label><br>
                  <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                  <label for="Goalkeeper">Goalkeeper</label><br>
                  <input type="radio" id="Guardian" name="certification"value="Guardian">
                  <label for="Guardian">Guardian</label><br>
                  <input type="radio" id="Juggler" name="certification"value="Juggler">
                  <label for="Juggler">Juggler</label><br>
                  <input type="radio" id="Paragon" name="certification"value="Paragon">
                  <label for="Paragon">Paragon</label><br>
                  <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                  <label for="Playmaker">Playmaker</label><br>
                  <input type="radio" id="Scorer" name="certification"value="Scorer">
                  <label for="Scorer">Scorer</label><br>
                  <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                  <label for=">Show-Off">Show-Off</label><br>
                  <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                  <label for=">Sniper">Sniper</label><br>
                  <input type="radio" id=">Striker" name="certification"value=">Striker">
                  <label for=">Striker">Striker</label><br>
                  <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                  <label for=">Sweeper">Sweeper</label><br>
                  <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                  <label for=">Tactician">Tactician</label><br>
                  <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                  <label for=">Turtle">Turtle</label><br>
                  <input type="radio" id=">Victor" name="certification"value=">Victor">
                  <label for=">Victor">Victor</label><br>
                </div>
              </div>



        <input type="hidden" name="price" value="0">
        <input type="hidden" name="rarity" value="Common">
        <input type="hidden" name="type" value="Rocket Boost">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Flamethrower">

  </form>
  </div>
  </section>


  <section class="itemContainer" >

  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Flamerthrower Blue" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQ-TG3Ic5bQHvJBmfoh2fHsB7GHe7irgBaVb0nTnQcoEJn0g3k95917HKU48Uys-pf34mEJzVAMIxMu/pub?w=220&h=220" height = 220px width = 220px> <p>Flamerthrower Blue</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Flamerthrower Blue">

  </form>
  </div>

  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Flamerthrower Red" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQm3av3dKCyJlKd2JObxh1hFjGVb_6pWOoaN3OsYiGG4rE49H2qgLsvcuiXAo93zJPM4UFS8B-zppky/pub?w=221&h=219" height = 220px width = 220px> <p>Flamerthrower Red</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Flamerthrower Red">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Flamerthrower Green" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRcaUlj9MLxFLRXu2XQRFk71GBPU3oGgLDj6Di0gkKqP9TRgmq4MdfYZKJpU5YYdiqFoM7ygIpCN7ps/pub?w=219&h=219" height = 220px width = 220px> <p>Flamerthrower Green</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Flamerthrower Green">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Flamerthrower Pink" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vT4Z1l9KpL4zfTergi9MwG0fvFtAKgTQoax-mRBoZv2x47vp4z59jvn1oetXwUgxp8y-9mbobpQKJM8/pub?w=221&h=220" height = 220px width = 220px> <p>Flamerthrower Pink</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Flamerthrower Pink">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Flamerthrower Purple" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vT31Gr944Lt2TGYFOf1NshSbT3PxzF974P6E3pzfPeDQxMjD46SUKY2mCMM1b2J0Yi8eQHe5Fjd2Az5/pub?w=220&h=219" height = 220px width = 220px> <p>Flamerthrower Purple</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Flamerthrower Purple">

  </form>
  </div>
  </section>

  <section class="itemContainer" >

  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Flamethrower Yellow" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTEjttbuW4c0RQ9XV3TBu2a1VeWkDq_B3exm0ZqML6PfCCjm2pftmZpFC-pXuB_KXIlXSoW30AUqW_b/pub?w=219&h=219" height = 220px width = 220px> <p>Flamethrower Yellow</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Flamethrower Yellow">

  </form>
  </div>

  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Flowers" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRHQcId0CRw4olOMd66y9nESl_qQ-b5MtpN2jH4frcLhKgd7Pxb3jGFq_QRFr9IF2QZcNKUxRWdZeFb/pub?w=220&h=220" height = 220px width = 220px> <p>Flowers</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Flowers">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Grass" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRMEfrmfufNOXmsh72bhwgi00jhHmP4rgAddInCJATfCGBF40XbFk5rbEf_pmqL-rjla_da9_-WqQNH/pub?w=135&h=134" height = 220px width = 220px> <p>Grass</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Grass">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hydro" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQv2BIblT36V-EqOXlPWgH1oTgzyifuZWcQdfiIJiM__FPyLXEgpUeEsMdNkgH5u7mPB0YQfqJrjiJt/pub?w=220&h=220" height = 220px width = 220px> <p>Hydro</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hydro">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Imulsion" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSm8Yy7f0-VIVQgtdB_wCywPDrfwoTFd9onE89CUNjmHSw7G7mxJR-R8o4fHp7Le6uoubw_25W9_EU4/pub?w=219&h=220" height = 220px width = 220px> <p>Imulsion</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Imulsion">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Interdimensional GB" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRbN_HmtfmvqK4A6x9IKm1f_yiWovGja3uV1PeZRjAm36ilTql06ZhDscpB3boz8fjLrkNCSG2SZsV5/pub?w=221&h=220" height = 220px width = 220px> <p>Interdimensional GB</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Interdimensional GB">

  </form>
  </div>

  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ion" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQgLoNkCWps74pkvjUd75zzq40WDHdvusnxmoOcBWzZsgVhvKbGQc5wAbsVojggMJryG0hTsHcT_7WC/pub?w=218&h=217" height = 220px width = 220px> <p>Ion</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ion">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ion Green" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vR2nEWKXB3IKc4_xjn-3vi2aE938bgdF61s7rYyO1oYWgOETCT0uAiKHNXaZLXt6aj0oxSjaP0VVNEN/pub?w=220&h=219" height = 220px width = 220px> <p>Ion Green</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ion Green">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ion Pink" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTc-dOGLTxWQWZlmR-DyLXmd1UvdkNGMjWiIXqTX2fFvKsNUQWNJ43aNrqte1j_pdL0uoz2OC9MIbyE/pub?w=220&h=219" height = 220px width = 220px> <p>Ion Pink</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ion Pink">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ion Purple" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRSyvh6VxjTEKcJWIaJB31BNCvNmP3Ck_1MFjSwvfdKlOUoduuHdXlLzQ7nUcYJkZZxhZmDqnGTffK6/pub?w=218&h=220" height = 220px width = 220px> <p>Ion Purple</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ion Purple">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ion Red" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vS6AkqUj3uYx7yNRSmYZLTOLP1sHm7RTRcUQ_ewJPymtq-JrFWKmyUb7N-1VdreNTc7sRIYPn6YSsqB/pub?w=219&h=217" height = 220px width = 220px> <p>Ion Red</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ion Red">

  </form>
  </div>

  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ion Yellow" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRh-YWksDfcBA4SP7zE2kbl2XKkbsGgHCfijjFGm7r5xq7-ydu1GaR_kHlKxgzdf_4RdLQaw5SfrTyf/pub?w=219&h=217" height = 220px width = 220px> <p>Ion Yellow</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ion Yellow">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Money" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTfsDyWe8I2ZEIJZVwaLYxlxHsthSqR-1fKZ562Ng_X4ghP25E4xXinj4pI2pOY0k0ul00b8ElKXVPc/pub?w=218&h=216" height = 220px width = 220px> <p>Money</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Money">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Overcharge" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSsQfVAZ6Je4G8Htvmx5j14wE1yxbFbpr-zSVlSFHie3P_4ZETaLUEtmpeGvFmeTBhyfBirlp15vzVF/pub?w=219&h=219" height = 220px width = 220px> <p>Overcharge</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Overcharge">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Plasma" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQsh02liy3uhA0sL7x-pOgIx0fMyK72jQDi-SzqWVnLN25BF-8G_j-PPzhQ96Zktp-MSGbq2K8VLV_d/pub?w=220&h=217" height = 220px width = 220px> <p>Plasma</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Plasma">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Portal - Conversion Gel" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSIAO67uz7UpORHQyQqEySFcC9feYSAKvYguYgAlcjNbs0j94rzzRaNFNkgp1-e2P519f0jKstrsIYr/pub?w=219&h=217" height = 220px width = 220px> <p>Portal - Conversion Gel</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Portal - Conversion Gel">

  </form>
  </div>

  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Portal - Propulsion Gel" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vS9V2CGbZ5yph5o_WR-fT2gUyh0tt1I5GeJPh1UxYgiyM-C5jf7KOKN6JZdd2x6pjYbzsGObyRx7BrY/pub?w=218&h=217" height = 220px width = 220px> <p>Portal - Propulsion Gel</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Portal - Propulsion Gel">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Portal - Repulsion Gel" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQxLn4wGz5eOpm_XnubicVxZNAz0ElGsi9DTrPn9eeo_mi2m9Nxd0XnoLVdVAQEBi_POkdVexPID791/pub?w=218&h=217" height = 220px width = 220px> <p>Portal - Repulsion Gel</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Portal - Repulsion Gel">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Rainbow" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vR3mIFC_ddSO-N3STs3fVWF-XXUfVEmZprg1NrESwH0gqIRbV8prlke-9qll6JStsxhbFUrm0Wv8lrX/pub?w=218&h=217" height = 220px width = 220px> <p>Rainbow</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Rainbow">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Sacred" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSlRC8ChZPRLt5k99t2KcuCGwOaDdupN5B8hkwhgNlR11Lt-3T9Yj4FObcwcncwIv3RnoCDBdio-ety/pub?w=134&h=133" height = 220px width = 220px> <p>Sacred</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Sacred">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Slime" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQboxFfGmJX8XfmBsAEsF2TKNs3mGnwmZzZ1HBnV6moJTD5Y0tqMqKufqsh8ZJPISBqVewJFzhroipB/pub?w=218&h=217" height = 220px width = 220px> <p>Slime</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Slime">

  </form>
  </div>

  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Snowflakes" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSu1y2KgJPzX1bbCKd1vbq7lGL6ifqC1J667XhVvBZJHSK6kHLyYZu1w-EoIkdyKJYhxWzSseMzd9ro/pub?w=135&h=131" height = 220px width = 220px> <p>Snowflakes</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Snowflakes">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Sparkles" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQDqDhkh46qk99UGxY22v2WqpJL48mvwyByO1L0ggkFpuxBVodculNZJClteOoP8jxuuGIYU86bRUlT/pub?w=133&h=133" height = 220px width = 220px> <p>Sparkles</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Sparkles">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Standard Blue" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTi7-iCWLfpWrq5h3P6e9etbowGJ6oJ0ExTIr266m4evrB8pqxjksglDNJfORi7O7eyVzQzzPVYZ43a/pub?w=218&h=220" height = 220px width = 220px> <p>Standard Blue</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Standard Blue">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Standard Green" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQEuQzcRjI8NIx8sUjk2zRnaTMIsrM4PsGks6Aldam-4j5lwqQDGLFr820zWiRKOD5G239Vo4H5lThI/pub?w=218&h=220" height = 220px width = 220px> <p>Standard Green</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Standard Green">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Standard Pink" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSZ_mzgtOmdz2v1sBWkHzad3mSao4slf9BE-IrZ6e4svYwYrjZTuadn6Rp5zjzPQ0f26yVfuxtpir2b/pub?w=218&h=220" height = 220px width = 220px> <p>Standard Pink</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Standard Pink">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Standard Purple" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSlflaZzSZI5RSU2LfcvSDMS0killY_7lanbZlC4lNv7OYgRFJZfRYzrjmOeS2W_u_ETyrx6kKVMh4S/pub?w=217&h=215" height = 220px width = 220px> <p>Standard Purple</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Standard Purple">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Standard Yellow" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSWgsYLg6-J0bBeXH7f8HnkV1bj4fGpYn39wzMeliqaJ5azcxAqVT8lmyYOFfXz7hjssYF1hCmR29wf/pub?w=218&h=215" height = 220px width = 220px> <p>Standard Yellow</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Standard Yellow">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Super Star" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/56/Super_Star_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200111193400" height = 220px width = 220px> <p>Super Star</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Super Star">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Sweet Tooth" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSTAdVzydt988HE7brjran6itMB-rIQAx-rMNNX9qId44eE7skYlMXEe6RA-qJWySIHpXtpvnhWHdTa/pub?w=219&h=216" height = 220px width = 220px> <p>Sweet Tooth</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Sweet Tooth">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Thermal" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQCifThooCzl_RaoSQs9IDjgjqCAYSdiXi9U7OTeqxbx2lajF5wKnBM7PwcpHSUZpJOUXtMWuuKfgM8/pub?w=221&h=220" height = 220px width = 220px> <p>Thermal</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Thermal">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Thermal Blue" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSG1I7yA17pqu49jR3S650uZW7aQTHz1DWG3Mk3rKyGwCYK_IDJLNBsXSxIvJKAgZRNIp9PxCMQO3Ca/pub?w=218&h=217" height = 220px width = 220px> <p>Thermal Blue</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Thermal Blue">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Thermal Green" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSabW6tPKeWRY2bcrl5sHc2B5Bt4y5Ia0MVFV0ZHlOwzehmoSyXWJp306c9N57b34SyaRTScZfiwHrm/pub?w=132&h=133" height = 220px width = 220px> <p>Thermal Green</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Thermal Green">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Thermal Pink" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSwUCyinOOJVPTAjI6lDIFbCRa30oc8okXj0nmxH6qQJ72euDanKD-He7sthaFWOKAdOQE_3TQOo_Gm/pub?w=132&h=132" height = 220px width = 220px> <p>Thermal Pink</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Thermal Pink">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Thermal Purple" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQgFSFp74NoaAF3tjBC-hEMsjh47XQ0URZm3mfTujqFskPTzAZkeXwrOBBbumbkzpuKeeHwCtIsrBK4/pub?w=134&h=134" height = 220px width = 220px> <p>Thermal Purple</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Thermal Purple">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Thermal Yellow" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSo4xTFXFxCMzdj80QMG9KVAYhitieqAw2StzC-An81diT2wE3fffkB1ePuFMZOtIDoC2orDjZUFysv/pub?w=134&h=133" height = 220px width = 220px> <p>Thermal Yellow</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Thermal Yellow">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="UV Turret" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/41/UV_Turret_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200111231557" height = 220px width = 220px> <p>UV Turret</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="UV Turret">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Wave Beam" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a3/Wave_Beam_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200111193359" height = 220px width = 220px> <p>Wave Beam</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Common">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Wave Beam">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="'16 Batmobile" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQZ1b3Jrh0VH27XeKV4ocJ84qR2qTDBKpzB3Gt0Uj_p3Qq6UADC2atiI4XUJavDXa5LQJL5orAuy_8y/pub?w=219&h=217" height = 220px width = 220px> <p>'16 Batmobile</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="'16 Batmobile">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="'89 Batmobile" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/ce/%2789_Batmobile_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190719014756" height = 220px width = 220px> <p>'89 Batmobile</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="'89 Batmobile">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Accelerato" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRKadXiq6m-F0cxnUCTErLQ091mXfRW0hQ_VPZHATDt22k_PDFuMQ_Vye_VwqQ-jht1IPkW2FAcx0Uq/pub?w=219&h=219" height = 220px width = 220px> <p>Accelerato</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Accelerato">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Baseball" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Baseball_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200419031851" height = 220px width = 220px> <p>Baseball</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Baseball">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Battle-Stars" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSWKhsIkwNnhNuw9CmR7-4_KtavyBZsr_9Sefk7T8H6YqY_LCKlCZA3VRWnlV67Us2eVN1UHfOnv-4R/pub?w=219&h=219" height = 220px width = 220px> <p>Battle-Stars</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Battle-Stars">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Burnout" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRi-8K9lHiBqWkMd17HULy04tU_jkQ5YkU4UICEvuXBcOg4m9HUtQ951tWmXm67Nh48LSDZbFtX4pkm/pub?w=218&h=219" height = 220px width = 220px> <p>Burnout</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Burnout">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="K.I.T.T." name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/1e/K.I.T.T._rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190919112202" height = 220px width = 220px> <p>K.I.T.T.</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="K.I.T.T.">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Nitrous" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSRTFTkE9QEIaPD2Wr3jSzyjUjAUcVs0bFXZCe5-o5m3yaRGr-OIr7qnV0XJMWPLUWGcLcvjtLEIplV/pub?w=100&h=100" height = 220px width = 220px> <p>Nitrous</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Nitrous">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Nuts & Bolts" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSe9NfptNuf9ECDHjyAxPwPqTtdbFTALuCJMpenonwkW5UH_2JR0Ityi8-zN5l1tC-vKv8pdpomiFEj/pub?w=133&h=133" height = 220px width = 220px> <p>Nuts & Bolts</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Nuts & Bolts">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Outatime" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRNGGh-bgq54ZpaHPonSrBQrsrkFTn6pZk8Kwh7fJMBRtOUBimnfY1NPRGEGajKkmSSecEgzHoMamHW/pub?w=218&h=217" height = 220px width = 220px> <p>Outatime</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Outatime">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Proton Pack" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9d/Proton_Pack_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190616000636" height = 220px width = 220px> <p>Proton Pack</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Proton Pack">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Sandstorm" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTakE7GQ81DPr3mrl6cFwbqst53zhisv82zjO7I3ihU-APZwPwPedjGdX-2RPi_m-L7vzTHVVRA-p5w/pub?w=220&h=220" height = 220px width = 220px> <p>Sandstorm</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
                <input type="radio" id=">Tactician" name="certification"value=">Tactician">
                <label for=">Tactician">Tactician</label><br>
                <input type="radio" id=">Turtle" name="certification"value=">Turtle">
                <label for=">Turtle">Turtle</label><br>
                <input type="radio" id=">Victor" name="certification"value=">Victor">
                <label for=">Victor">Victor</label><br>
              </div>
            </div>



      <input type="hidden" name="price" value="0">
      <input type="hidden" name="rarity" value="Premium">
      <input type="hidden" name="type" value="Rocket Boost">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Sandstorm">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Speed Force" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c2/Speed_Force_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200419031852" height = 220px width = 220px> <p>Speed Force</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Premium">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Speed Force">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="The Dark Knight Rises Tumbler" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a2/The_Dark_Knight_Rises_Tumbler_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190719014831" height = 220px width = 220px> <p>The Dark Knight Rises Tumbler</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Premium">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="The Dark Knight Rises Tumbler">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Autumn" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRvD9qvKQNL6F5iV7DaNbwzeWU-W8p7IqsbXphkEFT_rpe1VXrx8KASewd9CuJbLQyUSkN5J1K13BHR/pub?w=218&h=220" height = 220px width = 220px> <p>Autumn</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Autumn">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Beat Saber" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Beat_Saber_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191107224712" height = 220px width = 220px> <p>Beat Saber</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Beat Saber">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Blast Ray" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b6/Blast_Ray_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180310101401" height = 220px width = 220px> <p>Blast Ray</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Blast Ray">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Candy Corn" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSyDxuHrjrMBnGFQ4Xlk1RSMCJGFE5VNYrFHX6iEjN3OeqeQlxwz3YCSsObMYlvrBU31TgnsRnDRXbT/pub?w=133&h=132" height = 220px width = 220px> <p>Candy Corn</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Candy Corn">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Cloudburst I" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/ca/Cloudburst_I_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180918005544" height = 220px width = 220px> <p>Cloudburst I</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Cloudburst I">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Cloudburst II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5b/Cloudburst_II_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180918005545" height = 220px width = 220px> <p>Cloudburst II</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Cloudburst II">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Cloudburst III" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b3/Cloudburst_III_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180918005545" height = 220px width = 220px> <p>Cloudburst III</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Cloudburst III">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Cold Fusion" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a5/Cold_Fusion_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20170830171427" height = 220px width = 220px> <p>Cold Fusion</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Cold Fusion">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Cupid" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fa/Cupid_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191206162752" height = 220px width = 220px> <p>Cupid</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Cupid">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Ectoplasm" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/62/Ectoplasm_rocket_boost_icon.png/revision/latest/scale-to-width-down/164?cb=20190611020728" height = 220px width = 220px> <p>Ectoplasm</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Ectoplasm">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Faded Cosmos" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQtUESBow8RgLZ6QmroWswBN4GyRoTcXn9IAX9umCc1zn4THuaYwarMgr45mPctqy13Ja62_Z26c4lN/pub?w=216&h=217" height = 220px width = 220px> <p>Faded Cosmos</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Faded Cosmos">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Fiber Optic I" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0f/Fiber_Optic_I_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190902162258" height = 220px width = 220px> <p>Fiber Optic I</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Fiber Optic I">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Fiber Optic II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a9/Fiber_Optic_II_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190904151101" height = 220px width = 220px> <p>Fiber Optic II</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Fiber Optic II">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Fireworks" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vR8fZwTb6noOsP3Eww0gdK3AZ_xfkz6-8Rkljlyzs_Ye-J2jYskTA59lrdQpsPzdCNMWvJPYRNuotjV/pub?w=217&h=217" height = 220px width = 220px> <p>Fireworks</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Fireworks">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Fusion" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vR25qoJUuBl9evIrX4qIZlTSerWUR0dCP0qRdCihmdyhznwjkCo7FeULuD75VSITtCCzj_pYy_7__xQ/pub?w=218&h=219" height = 220px width = 220px> <p>Fusion</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Fusion">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Glimmerslag I" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4d/Glimmerslag_I_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200327232534" height = 220px width = 220px> <p>Glimmerslag I</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Glimmerslag I">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Glimmerslag II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e6/Glimmerslag_II_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200328052545" height = 220px width = 220px> <p>Glimmerslag II</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Glimmerslag II">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Gold Rush" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSctpH-CnW2T6D91p2uD9SwhGsJWavnBGGHv0ddSbuWZyguJRQdBGNtpAGeSX26A3kfgnUejTiQEjfO/pub?w=131&h=133" height = 220px width = 220px> <p>Gold Rush</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Gold Rush">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Golden Cosmos" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQvVdesX1IK8qhn_Nzp4s2_cVAPHplB_uvjdcDlwhI2Zm84YZp-gT3BH-xOST3ODZXxrcgMUcWcAiK-/pub?w=217&h=217" height = 220px width = 220px> <p>Golden Cosmos</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Golden Cosmos">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Helios" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8b/Helios_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20170621174320" height = 220px width = 220px> <p>Helios</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Helios">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="HoloData" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ed/HoloData_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200328052548" height = 220px width = 220px> <p>HoloData</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="HoloData">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Hot Rod" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTUl4m66WXeaqhdjwMFqDSvOYVJ6fdjaxgU55OoXQvtkWuxQCQARbvX4bRrulteGE_fJz2xXd-ULlKO/pub?w=216&h=217" height = 220px width = 220px> <p>Hot Rod</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Hot Rod">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Netherworld" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQUUQ_lK_qUOBmBc0hnQ5EhqLIWOCnqSkQhk2AL66BfCUXbAXKW0z7hSfNfP540_Cu1McdFAU3Jl4Si/pub?w=219&h=219" height = 220px width = 220px> <p>Netherworld</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Netherworld">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Night Terror" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSilo2XhSyXNlfPSpF237zT9OCQgKIcgbCsbtJpYdGutkCzpzIQ6uOtAzqi2KL9dZT6ef1iOLN2lCR_/pub?w=220&h=220" height = 220px width = 220px> <p>Night Terror</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Night Terror">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Party Horn" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQ7Byhf-NNcCCw6_eIAqrvNk6vPBQmdKOYObC3vLF65h4QMu_1Bufic3YmdFcxPB7xVNZjrngJ4aJGM/pub?w=219&h=219" height = 220px width = 220px> <p>Party Horn</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Party Horn">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Pickle" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSsQMiAdqjlkJkp3Yma2hSKI6sAKdG3q_PhBfPbIFAaloLoQMVwJJm6h3SUrNWefh-2H4XoJzVS6xOL/pub?w=218&h=217" height = 220px width = 220px> <p>Pickle</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Pickle">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Popcorn" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a7/Popcorn_rocket_boost_icon.PNG/revision/latest/scale-to-width-down/159?cb=20180428113327" height = 220px width = 220px> <p>Popcorn</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Popcorn">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Racer Flames" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fe/Racer_Flames_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190904002024" height = 220px width = 220px> <p>Racer Flames</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Racer Flames">

  </form>
  </div>

  </section>

  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Rad Rock" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e8/Rad_Rock_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200327232541" height = 220px width = 220px> <p>Rad Rock</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Rad Rock">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Radiant Gush" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a9/Radiant_Gush_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191208062616" height = 220px width = 220px> <p>Radiant Gush</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Radiant Gush">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Red Envelopes" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c1/Red_Envelopes_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200120192648" height = 220px width = 220px> <p>Red Envelopes</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Red Envelopes">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 11 - Bronze" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4b/Season_11_-_Bronze_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130919" height = 220px width = 220px> <p>Season 11 - Bronze</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 11 - Bronze">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 11 - Champion" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cd/Season_11_-_Champion_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130921" height = 220px width = 220px> <p>Season 11 - Champion</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 11 - Champion">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 11 - Diamond" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/56/Season_11_-_Diamond_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130921" height = 220px width = 220px> <p>Season 11 - Diamond</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 11 - Diamond">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 11 - Gold" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/48/Season_11_-_Gold_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130920" height = 220px width = 220px> <p>Season 11 - Gold</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 11 - Gold">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 11 - Grand Champion" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/79/Season_11_-_Grand_Champion_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130922" height = 220px width = 220px> <p>Season 11 - Grand Champion</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 11 - Grand Champion">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 11 - Platinum" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/18/Season_11_-_Platinum_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130921" height = 220px width = 220px> <p>Season 11 - Platinum</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 11 - Platinum">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 11 - Silver" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f3/Season_11_-_Silver_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130920" height = 220px width = 220px> <p>Season 11 - Silver</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 11 - Silver">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 2 â€“ Challenger" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTB7AFq04HySQs_LOGyIKrsudv2jEL-qqNjl9q-yE4gnOoIErUPQsA3x0aj4DgX6TstUUNIWSV2Wi9t/pub?w=216&h=219" height = 220px width = 220px> <p>Season 2 â€“ Challenger</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 2 â€“ Challenger">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 2 â€“ Champion" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vT7z46E2GDlPc8BU1TdH5D7DZe0ODyk4s9RIQLYx6Y32Fqkz55m-8nVGDWNsTKnKklpeTyUU0XdJbks/pub?w=218&h=219" height = 220px width = 220px> <p>Season 2 â€“ Champion</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 2 â€“ Champion">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 2 â€“ Prospect" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQnDzcc3jnhaEsctJSFjHzgOzhjLm4tQ0t-wnx9SMw7--jDHAFn3XqJwyR7K7yOphuS2CAJ4L2MuHSM/pub?w=219&h=220" height = 220px width = 220px> <p>Season 2 â€“ Prospect</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 2 â€“ Prospect">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 2 â€“ Star" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTINH1LraaV6jDOZWEGfz6P-8a44wHD1AF2S73PFaQYLDMSk2b9h09L91Cz39tyi3Bwa-6Mqqgw9fMQ/pub?w=216&h=217" height = 220px width = 220px> <p>Season 2 â€“ Star</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 2 â€“ Star">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 8 - Bronze" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5c/Season_8_-_Bronze_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130651" height = 220px width = 220px> <p>Season 8 - Bronze</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 8 - Bronze">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 8 - Champion" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/01/Season_8_-_Champion_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130653" height = 220px width = 220px> <p>Season 8 - Champion</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 8 - Champion">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 8 - Diamond" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5a/Season_8_-_Diamond_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130653" height = 220px width = 220px> <p>Season 8 - Diamond</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 8 - Diamond">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 8 - Gold" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2d/Season_8_-_Gold_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130652" height = 220px width = 220px> <p>Season 8 - Gold</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 8 - Gold">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 8 - Platinum" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4b/Season_8_-_Platinum_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130652" height = 220px width = 220px> <p>Season 8 - Platinum</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 8 - Platinum">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Season 8 - Silver" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d9/Season_8_-_Silver_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20200530130652" height = 220px width = 220px> <p>Season 8 - Silver</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Season 8 - Silver">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Shining Barrage I" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7d/Shining_Barrage_I_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191208001822" height = 220px width = 220px> <p>Shining Barrage I</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Shining Barrage I">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Shining Barrage II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Shining_Barrage_II_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191208001823" height = 220px width = 220px> <p>Shining Barrage II</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Shining Barrage II">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Slash Beam I" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/88/Slash_Beam_I_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190419033146" height = 220px width = 220px> <p>Slash Beam I</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Slash Beam I">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Slash Beam II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/78/Slash_Beam_II_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190419034301" height = 220px width = 220px> <p>Slash Beam II</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Slash Beam II">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Slash Beam III" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/73/Slash_Beam_III_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190419041549" height = 220px width = 220px> <p>Slash Beam III</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Slash Beam III">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Stranger Things" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f8/Stranger_Things_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191016033914" height = 220px width = 220px> <p>Stranger Things</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Stranger Things">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Streamer" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c9/Streamer_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191107224715" height = 220px width = 220px> <p>Streamer</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Streamer">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Super Manga-Bolt I" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cd/Super_Manga-Bolt_I_boost_icon.jpg/revision/latest/scale-to-width-down/159?cb=20181213033204" height = 220px width = 220px> <p>Super Manga-Bolt I</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Super Manga-Bolt I">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Super Manga-Bolt II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fd/Super_Manga-Bolt_II_boost_icon.jpg/revision/latest/scale-to-width-down/159?cb=20181213043937" height = 220px width = 220px> <p>Super Manga-Bolt II</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Super Manga-Bolt II">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Super Manga-Bolt III" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/82/Super_Manga-Bolt_III_boost_icon.jpg/revision/latest/scale-to-width-down/159?cb=20181213070415" height = 220px width = 220px> <p>Super Manga-Bolt III</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Super Manga-Bolt III">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Vaporwave" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ef/Vaporwave_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190702173453" height = 220px width = 220px> <p>Vaporwave</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Vaporwave">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Vaporwave Remix" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQUFsm9bVoaYWtrGTFWyxaZduXt32o4nJ878DGN-nTqZx--fBSjPMDEVZaJteGU8GTeEFtRu1ilYpMs/pub?w=217&h=216" height = 220px width = 220px> <p>Vaporwave Remix</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Vaporwave Remix">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Voltron" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRgT1fQTJeDhdJhWp9tr_IYeTrUaOSkhiV4RB0LXBxJvAv3suD1i65GjsasPBJGhdzzhVvx2ykWrmX5/pub?w=217&h=219" height = 220px width = 220px> <p>Voltron</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Voltron">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Watermelon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d8/Watermelon_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190831192613" height = 220px width = 220px> <p>Watermelon</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Watermelon">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Xmas" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQ-OskhQR4F7Q3WsnwZNbtzvv1O26e4owGmMcfvF3_TCrYJ0ZxA26Vn54uilw_8ic0fMW30udHXeDKT/pub?w=133&h=133" height = 220px width = 220px> <p>Xmas</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Xmas">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Xmas Lights" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/83/Xmas_Lights_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191217050204" height = 220px width = 220px> <p>Xmas Lights</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Limited">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Xmas Lights">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Feather" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4f/Feather_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171001193654" height = 220px width = 220px> <p>Feather</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Feather">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Frostbite" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vT0Gx61a6Q0rm-xtJSY6tOhki05IMwtvcAFgr5PkHkLuQZHIp_LQtJBZXmKYoKVA3eiVSCpAcwjnkGK/pub?w=219&h=219" height = 220px width = 220px> <p>Frostbite</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Frostbite">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Hearts" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSPuApktUzaFYYLGF0LYed_yLp-zlUbHrroRhjZBNBqv56qowyth_9u3Kqooa8IXnuGZ64G4Kfy9Bje/pub?w=219&h=218" height = 220px width = 220px> <p>Hearts</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Hearts">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Hexphase" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/35/Hexphase_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171001194354" height = 220px width = 220px> <p>Hexphase</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Hexphase">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Ink" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRu957gUbcWRvX9cXn6-9ppo038qbVhyQJISANLKEG8rEhH9P96pd6vVzxcMenlpge_dwdWB0wOL4yM/pub?w=220&h=220" height = 220px width = 220px> <p>Ink</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Ink">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Lightning" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRp3VEyBSxl4Wjxuwt7xdhOe3EZMIEATJ8KT64xIshZ3LJnrXpVgEjSHWb-TMM5PG4esZ9ksg1ST5mJ/pub?w=219&h=214" height = 220px width = 220px> <p>Lightning</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Lightning">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Lightning Yellow" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRqMahp7lt4ox61BGO8Lr1eZiZy82AdO4-OIEqjehR_XBMGDyCxSq3oPJTEcbhXxS73DPkhiPC_FsOB/pub?w=218&h=216" height = 220px width = 220px> <p>Lightning Yellow</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Lightning Yellow">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Magmus" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f6/Magmus_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171001193707" height = 220px width = 220px> <p>Magmus</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Magmus">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Polygonal" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSYQQK_9HbWVIPrIBfVWeaP_4Xwr2SWxNkJNcVOr4tMWha1ixC78nNEpNtVvTOlKO8jHRgdyAvac8ug/pub?w=219&h=219" height = 220px width = 220px> <p>Polygonal</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Polygonal">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Quasar" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSAmt3ysKSkw-e1CLurY2qHlAMOzc30OhRa7MZUu5cTKkJo_jgP8DyBH-Pc6tuVOdenEZZKvXB9_mFQ/pub?w=219&h=219" height = 220px width = 220px> <p>Quasar</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Quasar">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Scary Pumpkin" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ea/Scary_Pumpkin_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171017153645" height = 220px width = 220px> <p>Scary Pumpkin</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Scary Pumpkin">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Springtime Flowers" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0b/Springtime_flowers_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180611001948" height = 220px width = 220px> <p>Springtime Flowers</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Springtime Flowers">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Taco" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/11/Taco_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171001193714" height = 220px width = 220px> <p>Taco</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Taco">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Toon Smoke" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQiNjFvqyUalUB_mUecw0CL_YwxJcVFlOQ24gY9rZll5w52gtH2oqOjlKFymEPPL58qGmd32X7WO1iK/pub?w=217&h=216" height = 220px width = 220px> <p>Toon Smoke</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Toon Smoke">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Torrent" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/60/Torrent_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180714202017" height = 220px width = 220px> <p>Torrent</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Torrent">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Treasure" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vR1dBs3Qt9Rw1zzGsoxnvu8LnasUdf7NpU0EyC6GroOc8Vwx5ZxsSmChnrgYhu-_1x_1dUw5huTyejA/pub?w=220&h=218" height = 220px width = 220px> <p>Treasure</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Treasure">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Xenosplash" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/03/Xenosplash_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20170630152218" height = 220px width = 220px> <p>Xenosplash</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Xenosplash">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Yuletide" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fd/Yuletide_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171212172955" height = 220px width = 220px> <p>Yuletide</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Very Rare">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Yuletide">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Burnout" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQUBVsFHhwGBy2amWD7ipT1mnCl8WC1K_ZsIbtRNLI5lUs9AzpmlTiXeV77z0-oxl6b9WAAZqbm3naQ/pub?w=218&h=218" height = 220px width = 220px> <p>Burnout</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Burnout">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Cirrus" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRINscQddfdCnph4b264ydNYG3qwW1MNneYddT3NAYgkRSnQoQhEuWo7XS9erdbM2RoAmhQuHZfwyqr/pub?w=219&h=218" height = 220px width = 220px> <p>Cirrus</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Cirrus">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Comet" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e7/Comet_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180611001509" height = 220px width = 220px> <p>Comet</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Comet">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Dark Matter" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSgHP2s8tJdJZBgLA6PgukfLiqukk7Xd_iD-GfekLXtyb8oAyseYW_CCR61nisTc7Xde9I3P8KF_nrl/pub?w=219&h=219" height = 220px width = 220px> <p>Dark Matter</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Dark Matter">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Enchanter" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTc60iieexnnX3-4N1Qxws0OeYxvAulZ7gtLjdW209ajCxGdGgti-RO2E5fT4LLqLnWDbSMP-54MYqT/pub?w=219&h=219" height = 220px width = 220px> <p>Enchanter</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Enchanter">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Flamerate" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQ-jER-rs-2EHxW5QPXBlCrzPbeT4gg9mH9IsSSUhER577Bm3FrJ0EefCVi_DRqNTryGUd95-x6aRQ3/pub?w=219&h=219" height = 220px width = 220px> <p>Flamerate</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Flamerate">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Fractal Fire" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/1e/Fractal_Fire_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171204232557" height = 220px width = 220px> <p>Fractal Fire</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Fractal Fire">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Geo Soul" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/71/Geo_soul_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180611001509" height = 220px width = 220px> <p>Geo Soul</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Geo Soul">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Glitch" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/20/Glitch_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190226205705" height = 220px width = 220px> <p>Glitch</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Glitch">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Hypernova" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vR3LrZXHzQyv9YlziILw4Pm3rjnpPx05Hi_HVINYO36Jqkgq6JxjwXKE-Im2fOd525dMmYF8o7e-6yx/pub?w=219&h=219" height = 220px width = 220px> <p>Hypernova</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Hypernova">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Krackle" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a6/Krackle_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20190704172947" height = 220px width = 220px> <p>Krackle</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Krackle">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Magic Missile" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/62/Magic_Missile_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171001192918" height = 220px width = 220px> <p>Magic Missile</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Magic Missile">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Neo-Thermal" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/63/Neo-Thermal_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171001193024" height = 220px width = 220px> <p>Neo-Thermal</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Neo-Thermal">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Ninja Star" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9b/Ninja_Star_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20191004234315" height = 220px width = 220px> <p>Ninja Star</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Ninja Star">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Pixel Fire" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vS6MBrFunMCzsu6PUgcyzlz9Ig9d3vgUlqVVbE-7Sq5h2Des8EbwMJgPwtBkO0TY_In9KxjlzolD1DW/pub?w=219&h=219" height = 220px width = 220px> <p>Pixel Fire</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Pixel Fire">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Power-Shot" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Power-Shot_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171001192818" height = 220px width = 220px> <p>Power-Shot</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Power-Shot">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Proton" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTrnF3x4ynJL3fg4pljMuj47VXosbB0F3cwali4kn5rAlBb7UqZrqBUImMy19ZlJNS1NJPwlTUmTHjy/pub?w=219&h=216" height = 220px width = 220px> <p>Proton</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Proton">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Righteous Gale" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTvBAFm3IegyCVwvjF6XUSVgfxsST4CBHMS5q2ixWVVRD-2ynlqduO0-KO--JRS7LpsXl0c3QQpBODl/pub?w=219&h=218" height = 220px width = 220px> <p>Righteous Gale</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Righteous Gale">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Sandstorm" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vTyeywQ9TzH_xVO76WZ_SRHRBfBcTxdkIwFoQjxg9rQDxPVPb6Em2X_ATlWeBlYVWq0j_2V8lP9KMuO/pub?w=219&h=217" height = 220px width = 220px> <p>Sandstorm</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Sandstorm">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Standard" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vSKqqN1NdzRwd7lA3U5ApjohA_DT0laVH-7R6bUAQ7X44kws9VigZIbxDpYfaoW21vBvGscZ_6wbo-z/pub?w=219&h=219" height = 220px width = 220px> <p>Standard</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Standard">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Sun Ray" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/21/Sun_Ray_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180714201824" height = 220px width = 220px> <p>Sun Ray</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Sun Ray">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Synthwave" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/15/Synthwave_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20181014021205" height = 220px width = 220px> <p>Synthwave</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Synthwave">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Tachyon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/60/Tachyon_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20170630152101" height = 220px width = 220px> <p>Tachyon</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Tachyon">

  </form>
  </div>

  <div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Toon Sketch" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/80/Toon_Sketch_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180208171750" height = 220px width = 220px> <p>Toon Sketch</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Toon Sketch">

  </form>
  </div>
  <div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Trinity" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vQOpG0MyTUSWQjNYR7hDoOQc6CenDvKkHzHEorJfczyzMx5OBXSkIaynYgNYvNcO3G8FAq2cDlpC0PJ/pub?w=217&h=217" height = 220px width = 220px> <p>Trinity</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Trinity">

  </form>
  </div>


  <div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Tsunami Beam" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a5/Tsunami_Beam_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20180208171807" height = 220px width = 220px> <p>Tsunami Beam</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Tsunami Beam">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Virtual Wave" name="item-enter">    <img src="https://docs.google.com/drawings/d/e/2PACX-1vRG59ZnWno3drOChxq9hIUV2pq9ekm6_RdSDzQ7Ery_5L0tcLEY_0uAMC7OFsmpDppPAO-n1MsTGDxU/pub?w=218&h=218" height = 220px width = 220px> <p>Virtual Wave</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Virtual Wave">

  </form>
  </div>
  <div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Winter Storm" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/53/Winter_Storm_rocket_boost_icon.png/revision/latest/scale-to-width-down/159?cb=20171212173131" height = 220px width = 220px> <p>Winter Storm</p></button>

    <div id="selectColor1" class = "dropdown-content">
    <p>Color</p>
    <div id="tColor1" class="dropdown-content">
      <input type="radio" id="Lime" name="paint" value="Lime">
      <label for="Lime">Lime</label><br>
      <input type="radio" id="Black" name="paint" value="Black">
      <label for="Black">Black</label><br>
      <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
      <label for="Burnt Sienna">Burnt Sienna</label><br>
      <input type="radio" id="Cobalt" name="paint" value="Cobalt">
      <label for="Cobalt">Cobalt</label><br>
      <input type="radio" id="Forest Green" name="paint" value="Forest Green">
      <label for="Forest Green">Forest Green</label><br>
      <input type="radio" id="Grey" name="paint" value="Grey">
      <label for="Grey">Grey</label><br>
      <input type="radio" id="Orange" name="paint" value="Orange">
      <label for="Orange">Orange</label><br>
      <input type="radio" id="Pink" name="paint" value="Pink">
      <label for="Pink">Pink</label><br>
      <input type="radio" id="Purple" name="paint" value="Purple">
      <label for="Purple">Purple</label><br>
      <input type="radio" id="Saffron" name="paint" value="Saffron">
      <label for="Saffron">Saffron</label><br>
      <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
      <label for="Sky Blue">Sky Blue</label><br>
      <input type="radio" id="Titanium White" name="paint" value="Titanium White">
      <label for="Titanium White">Titanium White</label><br>
      <input type="radio" id="Crimson" name="paint" value="Crimson">
      <label for="Crimson">Crimson</label><br>
    </div>

   </div>
    <div id="selectCert1" class = "dropdown-content">
      <p>Certification</p>
      <div id="tCert1" class="dropdown-content">
        <input type="radio" id="Acrobat" name="certification" value="Acrobat">
        <label for="Acrobat">Acrobat</label><br>
        <input type="radio" id="Aviator" name="certification"value="Aviator">
        <label for="Aviator">Aviator</label><br>
        <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
        <label for="Goalkeeper">Goalkeeper</label><br>
        <input type="radio" id="Guardian" name="certification"value="Guardian">
        <label for="Guardian">Guardian</label><br>
        <input type="radio" id="Juggler" name="certification"value="Juggler">
        <label for="Juggler">Juggler</label><br>
        <input type="radio" id="Paragon" name="certification"value="Paragon">
        <label for="Paragon">Paragon</label><br>
        <input type="radio" id="Playmaker" name="certification"value="Playmaker">
        <label for="Playmaker">Playmaker</label><br>
        <input type="radio" id="Scorer" name="certification"value="Scorer">
        <label for="Scorer">Scorer</label><br>
        <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
        <label for=">Show-Off">Show-Off</label><br>
        <input type="radio" id=">Sniper" name="certification"value=">Sniper">
        <label for=">Sniper">Sniper</label><br>
        <input type="radio" id=">Striker" name="certification"value=">Striker">
        <label for=">Striker">Striker</label><br>
        <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
        <label for=">Sweeper">Sweeper</label><br>
        <input type="radio" id=">Tactician" name="certification"value=">Tactician">
        <label for=">Tactician">Tactician</label><br>
        <input type="radio" id=">Turtle" name="certification"value=">Turtle">
        <label for=">Turtle">Turtle</label><br>
        <input type="radio" id=">Victor" name="certification"value=">Victor">
        <label for=">Victor">Victor</label><br>
      </div>
    </div>



  <input type="hidden" name="price" value="0">
  <input type="hidden" name="rarity" value="Import">
  <input type="hidden" name="type" value="Rocket Boost">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Winter Storm">

  </form>
  </div>


</section>
</section>
      </div>
    </section>

    <footer>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <p>Rocket Inventory, Copyright &copy;</p>
    </footer>
  </body>
</html>
