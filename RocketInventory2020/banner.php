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
              <td><a href="boost.php">Boosts</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="topper.php">Toppers</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="goalexplosion.php">Goal Explosions</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="trail.php">Trails</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="banner.php" class="currentpage">Banners</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
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

#Banner {
max-width:200px;
margin-top: -100px;
}
#Banner:hover #selectColor1  {
  display: block;
  position:relative;
}
#Banner:hover #selectCert1  {
  display: block;
  position: relative;

}
#Banner:hover #submit1  {
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
  <div id="Banner" class ="one">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Aquaman" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fb/Aquaman_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180408185259" height = 220px width = 220px> <p>Aquaman</p></button>

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
        <input type="hidden" name="type" value="Banner">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Aquaman">

  </form>
  </div>

  <div id="Banner" class ="two">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Batman" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cd/Batman_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180408185259" height = 220px width = 220px> <p>Batman</p></button>

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
        <input type="hidden" name="type" value="Banner">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Batman">

  </form>
  </div>
  <div id="Banner" class ="three">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Cyborg" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/70/Cyborg_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180408185300" height = 220px width = 220px> <p>Cyborg</p></button>

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
        <input type="hidden" name="type" value="Banner">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Cyborg">

  </form>
  </div>

  <div id="Banner" class ="four">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="DC Comics" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/83/DC_Comics_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191109180203" height = 220px width = 220px> <p>DC Comics</p></button>

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
        <input type="hidden" name="type" value="Banner">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="DC Comics">

  </form>
  </div>
  <div id="Banner" class ="five">
    <form action="includes/items.inc.php" method="post">


              <button type="enter" value="Ghostbusters" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/69/Ghostbusters_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190612154636" height = 220px width = 220px> <p>Ghostbusters</p></button>

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
        <input type="hidden" name="type" value="Banner">
        <input type="hidden" name="specialEdition" value="0">
        <input type="hidden" name="itemName" value="Ghostbusters">

  </form>
  </div>
  </section>


  <section class="itemContainer" >

  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Green Arrow" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c3/Green_Arrow_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180408185301" height = 220px width = 220px> <p>Green Arrow</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Green Arrow">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Green Lantern" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a8/Green_Lantern_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180408185301" height = 220px width = 220px> <p>Green Lantern</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Green Lantern">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Jurassic Park" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8a/Jurassic_Park_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180711025243" height = 220px width = 220px> <p>Jurassic Park</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Jurassic Park">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Jurassic World" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d9/Jurassic_World_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180711025244" height = 220px width = 220px> <p>Jurassic World</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Jurassic World">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="McLaren I" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6a/McLaren_I_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213215419" height = 220px width = 220px> <p>McLaren I</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="McLaren I">

  </form>
  </div>
  </section>

  <section class="itemContainer" >

  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="McLaren II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c4/McLaren_II_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213215541" height = 220px width = 220px> <p>McLaren II</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="McLaren II">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Mr DNA" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/78/Mr_DNA_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180711025244" height = 220px width = 220px> <p>Mr DNA</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Mr DNA">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Superman" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a3/Superman_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180408185302" height = 220px width = 220px> <p>Superman</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Superman">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="The Flash" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4d/The_Flash_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191109180235" height = 220px width = 220px> <p>The Flash</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="The Flash">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Wonder Woman" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0b/Wonder_Woman_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180408185302" height = 220px width = 220px> <p>Wonder Woman</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Wonder Woman">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Abstract" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/16/Abstract_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213032455" height = 220px width = 220px> <p>Abstract</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Abstract">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Aloha" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/89/Aloha_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419043109" height = 220px width = 220px> <p>Aloha</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Aloha">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Avant-Grade" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0f/Avant-Grade_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190831192607" height = 220px width = 220px> <p>Avant-Grade</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Avant-Grade">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Battle-Cars Anniversary" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Battle-Cars_Anniversary_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180710195726" height = 220px width = 220px> <p>Battle-Cars Anniversary</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Battle-Cars Anniversary">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Birthday Bash" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/70/Birthday_Bash_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180710195727" height = 220px width = 220px> <p>Birthday Bash</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Birthday Bash">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Bit Head" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Bit_Head_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328061418" height = 220px width = 220px> <p>Bit Head</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Bit Head">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="BKR" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/12/BKR_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190612154637" height = 220px width = 220px> <p>BKR</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="BKR">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Blueprint" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/13/Blueprint_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180917072848" height = 220px width = 220px> <p>Blueprint</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Blueprint">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Blueprint II" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/27/Blueprint_II_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419043110" height = 220px width = 220px> <p>Blueprint II</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Blueprint II">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Breakneck" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4b/Breakneck_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191208001815" height = 220px width = 220px> <p>Breakneck</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Breakneck">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Broken Glass" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e8/Broken_Glass_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190904002019" height = 220px width = 220px> <p>Broken Glass</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Broken Glass">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Camo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a8/Camo_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180917072849" height = 220px width = 220px> <p>Camo</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Camo">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Caution Mechanics" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/01/Caution_Mechanics_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328061100" height = 220px width = 220px> <p>Caution Mechanics</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Caution Mechanics">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Checkered Flag " name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/01/Checkered_Flag_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190831192608" height = 220px width = 220px> <p>Checkered Flag </p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Checkered Flag">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Chou JP" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0a/CHOU_JP_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191208001816" height = 220px width = 220px> <p>Chou JP</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Chou JP">

  </form>
  </div>
  </section>
  <section class="itemContainer" >

  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Cold Sweater" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/47/Cold_Sweater_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191109181854" height = 220px width = 220px> <p>Cold Sweater</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Cold Sweater">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Copper Crisis" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/76/Copper_Crisis_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191008181237" height = 220px width = 220px> <p>Copper Crisis</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Copper Crisis">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Cyberglyph" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ec/Cyberglyph_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213044412" height = 220px width = 220px> <p>Cyberglyph</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Cyberglyph">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Demogorgon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5a/Demogorgon_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191016033910" height = 220px width = 220px> <p>Demogorgon</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Demogorgon">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Electrified" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/27/Electrified_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191208062612" height = 220px width = 220px> <p>Electrified</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Electrified">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Fighter Junk" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f8/Fighter_Junk_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190426040009" height = 220px width = 220px> <p>Fighter Junk</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Fighter Junk">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Frostline" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/83/Frostline_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181219004419" height = 220px width = 220px> <p>Frostline</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Frostline">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Gamer Pad" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/74/Gamer_Pad_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213000117" height = 220px width = 220px> <p>Gamer Pad</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Gamer Pad">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Geometry X" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fe/Geometry_X_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419033110" height = 220px width = 220px> <p>Geometry X</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Geometry X">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ghost Story" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6a/Ghost_story_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181015182235" height = 220px width = 220px> <p>Ghost Story</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ghost Story">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Glitched" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/07/Glitched_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328061213" height = 220px width = 220px> <p>Glitched</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Glitched">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Gold-Plated" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/36/Gold-Plated_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213012030" height = 220px width = 220px> <p>Gold-Plated</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Gold-Plated">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Good Piston" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/04/Good_Piston_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190904002023" height = 220px width = 220px> <p>Good Piston</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Good Piston">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Goodbye Nian" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/58/Goodbye_Nian_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200121204147" height = 220px width = 220px> <p>Goodbye Nian</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Goodbye Nian">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hibiscus" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6b/Hibiscus_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191206162754" height = 220px width = 220px> <p>Hibiscus</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hibiscus">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hoagie" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7f/Hoagie_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180918004252" height = 220px width = 220px> <p>Hoagie</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hoagie">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hornet" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/63/Hornet_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328060641" height = 220px width = 220px> <p>Hornet</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hornet">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Howler" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0d/Howler_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191109181947" height = 220px width = 220px> <p>Howler</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Howler">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hydrographic" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/10/Hydrographic_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419034806" height = 220px width = 220px> <p>Hydrographic</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hydrographic">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hypnoteks" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/38/Hypnoteks_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200418054729" height = 220px width = 220px> <p>Hypnoteks</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hypnoteks">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ice Pop" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/90/Ice_pop_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180614173449" height = 220px width = 220px> <p>Ice Pop</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ice Pop">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ika-san" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0e/Ika-san_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213064920" height = 220px width = 220px> <p>Ika-san</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ika-san">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ink Wash" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/55/Ink_Wash_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419041736" height = 220px width = 220px> <p>Ink Wash</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ink Wash">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Kaze" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/af/Kaze_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191206162754" height = 220px width = 220px> <p>Kaze</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Kaze">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Metropolis" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3c/Metropolis_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328060924" height = 220px width = 220px> <p>Metropolis</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Metropolis">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Mister Monsoon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/46/Mister_Monsoon_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419034011" height = 220px width = 220px> <p>Mister Monsoon</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Mister Monsoon">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Moddyopolis" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/89/Moddyopolis_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328062137" height = 220px width = 220px> <p>Moddyopolis</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Moddyopolis">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Neon Runner" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a4/Neon_Runner_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191008181239" height = 220px width = 220px> <p>Neon Runner</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Neon Runner">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Picnic" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c9/Picnic_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200419214347" height = 220px width = 220px> <p>Picnic</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Picnic">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Pizza Pie" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/17/Pizza_Pie_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213072202" height = 220px width = 220px> <p>Pizza Pie</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Pizza Pie">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Power Surge" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/14/Power_Surge_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191208001820" height = 220px width = 220px> <p>Power Surge</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Power Surge">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Psyonix" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/61/Psyonix_Developer_player_banner_icon.png/revision/latest?cb=20180406011802" height = 220px width = 220px> <p>Psyonix</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Psyonix">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Racing Star" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2d/Racing_Star_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190904150825" height = 220px width = 220px> <p>Racing Star</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Racing Star">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Reiko" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2d/Reiko_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213055104" height = 220px width = 220px> <p>Reiko</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Reiko">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Retro Fresh" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e2/Retro_Fresh_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190426040010" height = 220px width = 220px> <p>Retro Fresh</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Retro Fresh">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Ripped Comic" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/14/Ripped_Comic_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419043334" height = 220px width = 220px> <p>Ripped Comic</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Ripped Comic">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="RL eSports" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b1/RL_eSports_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180310101458" height = 220px width = 220px> <p>RL eSports</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="RL eSports">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="RNSM" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c7/RNSM_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328060748" height = 220px width = 220px> <p>RNSM</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="RNSM">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Rocket Ball" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7a/Rocket_Ball_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213062931" height = 220px width = 220px> <p>Rocket Ball</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Rocket Ball">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Rocket Labs" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/47/Rocket_Labs_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180918004253" height = 220px width = 220px> <p>Rocket Labs</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Rocket Labs">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Smored" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5c/Smored_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180614173450" height = 220px width = 220px> <p>Smored</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Smored">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Scoops Ahoy" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7e/Scoops_Ahoy_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191105053847" height = 220px width = 220px> <p>Scoops Ahoy</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Scoops Ahoy">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Scratched" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/61/Scratched_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190902162300" height = 220px width = 220px> <p>Scratched</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Scratched">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Shark Attack" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7e/Shark_Attack_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180918004251" height = 220px width = 220px> <p>Shark Attack</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Shark Attack">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Shooting Star" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/27/Shooting_Star_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180331042823" height = 220px width = 220px> <p>Shooting Star</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Shooting Star">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Soccar Nebula" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c9/Soccar_Nebula_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180918004250" height = 220px width = 220px> <p>Soccar Nebula</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Soccar Nebula">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Soccer Splash" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/58/Soccer_Splash_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180331042823" height = 220px width = 220px> <p>Soccer Splash</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Soccer Splash">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Solar System" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/da/Solar_System_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180901231922" height = 220px width = 220px> <p>Solar System</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Solar System">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Sticker Shock" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6d/Sticker_shock_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190419043114" height = 220px width = 220px> <p>Sticker Shock</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Sticker Shock">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Sunset 1986" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6f/Sunset_1986_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190702173447" height = 220px width = 220px> <p>Sunset 1986</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Sunset 1986">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Sunstruck" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e8/Sunstruck_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190904151123" height = 220px width = 220px> <p>Sunstruck</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Sunstruck">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Sushi Board" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5c/Sushi_Board_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191222204918" height = 220px width = 220px> <p>Sushi Board</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Sushi Board">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Sushi Roll" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5b/Sushi_Roll_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180918004251" height = 220px width = 220px> <p>Sushi Roll</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Sushi Roll">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Swerved" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/91/Swerved_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191208062618" height = 220px width = 220px> <p>Swerved</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Swerved ">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Tilted Horizon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8c/Tilted_Horizon_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200328061316" height = 220px width = 220px> <p>Tilted Horizon</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Tilted Horizon">

  </form>
  </div>
  </section>
  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Tranquility" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9d/Tranquility_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191206162758" height = 220px width = 220px> <p>Tranquility</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Tranquility">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Trash It!" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/74/Trash_It_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180918004253" height = 220px width = 220px> <p>Trash It!</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Trash It!">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


    <button type="enter" value="Tread Heavily" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/72/Tread_Heavily_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181213072455" height = 220px width = 220px> <p>Tread Heavily</p></button>

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
  <input type="hidden" name="type" value="Banner">
  <input type="hidden" name="specialEdition" value="0">
  <input type="hidden" name="itemName" value="Tread Heavily">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Triplicate" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7d/Triplicate_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180901231923" height = 220px width = 220px> <p>Triplicate</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Triplicate">

  </form>
  </div>

  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Valorous" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/bf/Valorous_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191206162758" height = 220px width = 220px> <p>Valorous</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Valorous">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Vaporwave" name="item-enter">    <img src="https://www.rocketprices.com/images/rocket%20league/items/PS4-Vaporwave-(Banner).png" height = 220px width = 220px> <p>Vaporwave</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Vaporwave">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Venom Ride" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/93/Venom_Ride_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190831192613" height = 220px width = 220px> <p>Venom Ride</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Venom Ride">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Vice" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/ca/Vice_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180917072855" height = 220px width = 220px> <p>Vice</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Vice">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Winning Streak" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/1a/Winning_Streak_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180310101522" height = 220px width = 220px> <p>Winning Streak</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Winning Streak">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="WWE" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3e/WWE_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180407055801" height = 220px width = 220px> <p>WWE</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="WWE">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="WWE Monday Night Raw" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/19/WWE_Monday_Night_Raw_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180407055802" height = 220px width = 220px> <p>WWE Monday Night Raw</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="WWE Monday Night Raw">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="WWE Monday Night Raw" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3b/WWE_NXT_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180407055802" height = 220px width = 220px> <p>WWE Monday Night Raw</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="WWE Monday Night Raw">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="WWE SmackDown Live!" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b3/WWE_SmackDown_Live_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180407055803" height = 220px width = 220px> <p>WWE SmackDown Live!</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="WWE SmackDown Live!">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="WWE WrestleMania 34" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5e/WWE_WrestleMania_34_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180407055803" height = 220px width = 220px> <p>WWE WrestleMania 34</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="WWE WrestleMania 34">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Xmas Lights" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/73/Xmas_Lights_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20200121211629" height = 220px width = 220px> <p>Xmas Lights</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Xmas Lights">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Zag Toys" name="item-enter">    <img src="https://rocket-league.com/content/media/items/avatar/220px/8b1603a8d91544460460.png" height = 220px width = 220px> <p>Zag Toys</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Zag Toys">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ball King" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/15/Ball_King_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930153647" height = 220px width = 220px> <p>Ball King</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ball King">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Call Sign RL" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d9/Call_Sign_RL_player_banner_icon.png/revision/latest/scale-to-width-down/340?cb=20170930154125" height = 220px width = 220px> <p>Call Sign RL</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Call Sign RL">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Carrot Thief" name="item-enter">    <img src="https://rocket-league.com/content/media/items/avatar/220px/af0297d89d1586723698.png" height = 220px width = 220px> <p>Carrot Thief</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Carrot Thief">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Dead Serious" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/35/Dead_Serious_player_banner_icon.png/revision/latest?cb=20170930153753" height = 220px width = 220px> <p>Dead Serious</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Dead Serious">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Dendritic" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0d/Dendritic_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930153805" height = 220px width = 220px> <p>Dendritic</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Dendritic">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hat Trick" name="item-enter">    <img src="https://rocket-league.com/content/media/items/avatar/220px/c62ecfb33b1551121835.png" height = 220px width = 220px> <p>Hat Trick</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hat Trick">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hearts" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4e/Hearts_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154920" height = 220px width = 220px> <p>Hearts</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Hearts">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Lucky Star" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0b/Lucky_Stars_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181014012653" height = 220px width = 220px> <p>Lucky Star</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Lucky Star">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Maximon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9b/Maximon_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154930" height = 220px width = 220px> <p>Maximon</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Maximon">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="MDGA" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e2/MDGA_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930153815" height = 220px width = 220px> <p>MDGA</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="MDGA">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Narwhal" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d9/Narwhal_player_banner_icon.png/revision/latest?cb=20170930153827" height = 220px width = 220px> <p>Narwhal</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Narwhal">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="NeOctane" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/83/Neoctane_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20190704172948" height = 220px width = 220px> <p>NeOctane</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="NeOctane">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Ouchie" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/45/Ouchie_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191004223730" height = 220px width = 220px> <p>Ouchie</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Ouchie">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Pixel Fire" name="item-enter">    <img src="https://www.rocketprices.com/images/rocket%20league/items/PS4-Pixel-Fire-(Banner).png" height = 220px width = 220px> <p>Pixel Fire</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Pixel Fire">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Rockat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9f/Rockat_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930153838" height = 220px width = 220px> <p>Rockat</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Rockat">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Shattered" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b3/Shattered_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930153849" height = 220px width = 220px> <p>Shattered</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Shattered">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Soccer Ball" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b6/Soccer_Ball_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930153859" height = 220px width = 220px> <p>Soccer Ball</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Soccer Ball">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Sticker Bomb" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a6/Sticker_Bomb_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930153917" height = 220px width = 220px> <p>Sticker Bomb</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Sticker Bomb">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Tagged" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7e/Tagged_player_banner_icon.png/revision/latest/scale-to-width-down/340?cb=20170930154943" height = 220px width = 220px> <p>Tagged</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Tagged">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Tranquil Toff" name="item-enter">    <img src="https://www.rocketprices.com/images/rocket%20league/items/PS4-Tranquil-Toff.png" height = 220px width = 220px> <p>Tranquil Toff</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Tranquil Toff">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Turtle" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/68/Turtle_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154709" height = 220px width = 220px> <p>Turtle</p></button>

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
      <input type="hidden" name="rarity" value="Rare">
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Turtle">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Beaten Egg" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f4/Beaten_Egg_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154612" height = 220px width = 220px> <p>Beaten Egg</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Beaten Egg">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Bob's Ramen" name="item-enter">    <img src="https://rocketleaguevalues.com/assets/images/items/rocket-league-bob-s-ramen-banner.png" height = 220px width = 220px> <p>Bob's Ramen</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Bob's Ramen">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Burnout" name="item-enter">    <img src="https://www.rocketprices.com/images/rocket%20league/items/ps4-burnout.png" height = 220px width = 220px> <p>Burnout</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Burnout">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Calculated" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d7/Calculated_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154955" height = 220px width = 220px> <p>Calculated</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Calculated">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Circuit Board" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cb/Circuit_Board_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20181014012842" height = 220px width = 220px> <p>Circuit Board</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Circuit Board">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Doughnut Eater" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/07/Doughnut_Eater_player_banner_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20191109183711" height = 220px width = 220px> <p>Doughnut Eater</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Doughnut Eater">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Junk Food" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/76/Junk_Food_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154135" height = 220px width = 220px> <p>Junk Food</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Junk Food">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Lift Off" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/61/Lift_Off_player_banner_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20191109184007" height = 220px width = 220px> <p>Lift Off</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Lift Off">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Migraine" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/59/Migraine_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180604061123" height = 220px width = 220px> <p>Migraine</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Migraine">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Moai" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b7/Moai_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154206" height = 220px width = 220px> <p>Moai</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Moai">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Mrs. Avocado" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/56/Mrs._Avocado_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20180805161745" height = 220px width = 220px> <p>Mrs. Avocado</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Mrs. Avocado">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Nice Slice" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b5/Nice_Slice_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154228" height = 220px width = 220px> <p>Nice Slice</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Nice Slice">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Pigeon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/37/Pigeon_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170928222826" height = 220px width = 220px> <p>Pigeon</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Pigeon">

  </form>
  </div>
  </section>

  <section class="itemContainer" >
  <div id="Banner" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Salty" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/21/Salty_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930133730" height = 220px width = 220px> <p>Salty</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Salty">

  </form>
  </div>
  <div id="Banner" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Starbase ARC" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/21/Starbase_ARC_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930133508" height = 220px width = 220px> <p>Starbase ARC</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Starbase ARC">

  </form>
  </div>

  <div id="Banner" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Unicorn" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7d/Unicorn_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20170930154504" height = 220px width = 220px> <p>Unicorn</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Unicorn">

  </form>
  </div>
  <div id="Banner" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Winter's Warmth" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/39/Winter%27s_Warmth_player_banner_icon.png/revision/latest/scale-to-width-down/159?cb=20191109182115" height = 220px width = 220px> <p>Winter's Warmth</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Winter's Warmth">

  </form>
  </div>


  <div id="Banner" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Zombie" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/af/Zombie_player_banner_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20191109184230" height = 220px width = 220px> <p>Zombie</p></button>

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
      <input type="hidden" name="type" value="Banner">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Zombie">

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
