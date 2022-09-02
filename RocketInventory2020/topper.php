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
              <td><a href="inventory.php" class="currentpage">Bodies</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="decal.php">Decals</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="paint.php">Paints</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="wheel.php">Wheels</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td><a href="boost.php">Boosts</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
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

#Topper {
max-width:200px;
margin-top: -100px;
}
#Topper:hover #selectColor1  {
  display: block;
  position:relative;
}
#Topper:hover #selectCert1  {
  display: block;
  position: relative;

}
#Topper:hover #submit1  {
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

<div id="Topper" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Bobby Helmet" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7d/Bobby_Helmet_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422213500" height = 220px width = 220px> <p>Bobby Helmet</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Topper">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Bobby Helmet">

</form>
</div>

<div id="Topper" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Brünnehilde" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/81/Brunnehilde_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422210032" height = 220px width = 220px> <p>Brünnehilde</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Topper">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Brünnehilde">

</form>
</div>
<div id="Topper" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Octopus" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/27/Octopus_topper_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20190221214434" height = 220px width = 220px> <p>Octopus</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Topper">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Octopus">

</form>
</div>

<div id="Topper" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Cherry Top" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/81/Cherry_Top_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422210034" height = 220px width = 220px> <p>Cherry Top</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Topper">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Cherry Top">

</form>
</div>
<div id="Topper" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Cromulon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8c/Cromulon_topper_icon_saffron.png/revision/latest/top-crop/width/220/height/220?cb=20170717154117" height = 220px width = 220px> <p>Cromulon</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Topper">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Cromulon">

</form>
</div>
</section>


<section class="itemContainer" >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Day of the Tentacle" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4b/Day_of_the_tentacle_topper_icon.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/257/window-height/256?cb=20161222055641" height = 220px width = 220px> <p>Day of the Tentacle</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Day of the Tentacle">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Dayne's Cake" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/dd/Dayne%27s_Cake_topper_icon.png/revision/latest?cb=20200418200451" height = 220px width = 220px> <p>Dayne's Cake</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Dayne's Cake">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Deadmau5" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/1e/Deadmau5_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422210224" height = 220px width = 220px> <p>Deadmau5</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Deadmau5">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Devil Horns" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7f/Devil_Horns_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055204" height = 220px width = 220px> <p>Devil Horns</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Devil Horns">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Fez" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a9/Fez_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055205" height = 220px width = 220px> <p>Fez</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Fez">

</form>
</div>
</section>

<section class="itemContainer" >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Fire Helmet" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a7/Fire_Helmet_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055206" height = 220px width = 220px> <p>Fire Helmet</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Fire Helmet">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value=Halo name="item-enter">    <img src="https://www.rocketprices.com/images/rocket%20league/items/ps4-halo-TitaniumWhite.png" height = 220px width = 220px> <p>Halo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value=Halo>

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hard Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/dc/Hard_hat_topper_icon_orange.png/revision/latest?cb=20161222215150" height = 220px width = 220px> <p>Hard Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hard Hat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hot Wheels" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/26/Hot_Wheels_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20170222003722" height = 220px width = 220px> <p>Hot Wheels</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hot Wheels">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Luigi" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4f/Luigi_topper_icon.png/revision/latest/top-crop/width/220/height/220?cb=20171117153515" height = 220px width = 220px> <p>Luigi</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Luigi">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Mariachi Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cc/Mariachi_Hat_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055325" height = 220px width = 220px> <p>Mariachi Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Mariachi">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Mario" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/da/Mario_topper_icon.png/revision/latest/top-crop/width/220/height/220?cb=20171117153130" height = 220px width = 220px> <p>Mario</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Mario">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Monstercat Uncaged" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b1/Monstercat_Uncaged_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20190406092112" height = 220px width = 220px> <p>Monstercat Uncaged</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Monstercat Uncaged">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Mr. Meeseeks" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/dd/Mr._Meeseeks_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=201707052335179" height = 220px width = 220px> <p>Mr. Meeseeks</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Mr. Meeseeks">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Mr. PBH" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c1/Mr._PBH_topper_icon.png/revision/latest?cb=20170705233603" height = 220px width = 220px> <p>Mr. PBH</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Mr. PBH">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Pirate's Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/10/Pirates_Hat_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055325" height = 220px width = 220px> <p>Pirate's Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Pirate's Hat">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Pizza Topper" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fc/Pizza_Topper_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422213458" height = 220px width = 220px> <p>Pizza Topper</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Pizza Topper">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Portal - Cake" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fc/Portal_Cake_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422212716" height = 220px width = 220px> <p>Portal - Cake</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Portal - Cake">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Propellerhead" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cc/Propellerhead_topper_icon.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/257/window-height/256?cb=20200422212715" height = 220px width = 220px> <p>Propellerhead</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Propellerhead">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Rainbow" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8d/Rainbow_topper_icon.png/revision/latest?cb=20170930165905" height = 220px width = 220px> <p>Rainbow</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Rainbow">

</form>
</div>
</section>
<section class="itemContainer"itemContainer >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Royal Crown" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/ca/Royal_Crown_topper_icon.png/revision/latest?cb=20161222055326" height = 220px width = 220px> <p>Royal Crown</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Royal Crown">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Shark Bite" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/30/Shark_Bite_topper_icon.png/revision/latest?cb=20170812151040" height = 220px width = 220px> <p>Shark Bite</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Shark Bite">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Sombrero" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/67/Sombrero_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422212610" height = 220px width = 220px> <p>Sombrero</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Sombrero">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Succulents" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/67/Succulents_topper_icon.png/revision/latest?cb=20170930165920" height = 220px width = 220px> <p>Succulents</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Succulents">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Sushi Nigiri" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/11/Sushi_Nigiri_topper_icon.png/revision/latest?cb=20170930165932" height = 220px width = 220px> <p>Sushi Nigiri</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Sushi Nigiri">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Taxi Topper" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f7/Taxi_Topper_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422212609" height = 220px width = 220px> <p>Taxi Topper</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Taxi Topper">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Top Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c2/Top_Hat_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055327" height = 220px width = 220px> <p>Top Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Top Hat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Witch's Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e9/Witchs_Hat_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055500" height = 220px width = 220px> <p>Witch's Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Witch's Hat">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Wizard Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/33/Wizard_Hat_topper_icon.png/revision/latest?cb=20161222055501" height = 220px width = 220px> <p>Wizard Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Wizard Hat">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Worms W.M.D." name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f1/Worms_W.M.D._topper_icon.png/revision/latest?cb=20161222055925" height = 220px width = 220px> <p>Worms W.M.D.</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Worms W.M.D.">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Antlers" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e0/Antlers_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200317131818" height = 220px width = 220px> <p>Antlers</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Antlers">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Baseball Cap (B)" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b0/Baseball_cap_b_topper_icon.png/revision/latest?cb=20200422210031" height = 220px width = 220px> <p>Baseball Cap (B)</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Baseball Cap (B)">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Baseball Cap (A)" name="item-enter">    <img src="https://www.rocketprices.com/images/rocket%20league/items/PS4-Baseball-Cap-(F).png" height = 220px width = 220px> <p>Baseball Cap (A)</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Baseball Cap (A)">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Beret" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5a/Beret_topper_icon_black.png/revision/latest?cb=20161227204641" height = 220px width = 220px> <p>Beret</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Beret">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Biker Cap" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/bf/Biker_Cap_topper_icon.png/revision/latest?cb=20200422213501" height = 220px width = 220px> <p>Biker Cap</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Biker Cap">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Birthday Cake" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e7/Birthday_cake_topper_icon_pink.png/revision/latest?cb=20161223020505" height = 220px width = 220px> <p>Birthday Cake</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Birthday Cake">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Bowler" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/25/Bowler_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055202" height = 220px width = 220px> <p>Homburg</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Bowler">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Brodie Helmet" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/54/Brodie_helmet_topper_icon_grey.png/revision/latest?cb=20161223022806" height = 220px width = 220px> <p>Brodie Helmet</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Brodie Helmet">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Bycocket" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/95/Bycocket_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20171001123012" height = 220px width = 220px> <p>Bycocket</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Bycocket">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Captain's Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/61/Captain%27s_Hat_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422210033" height = 220px width = 220px> <p>Captain's Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Captain's Hat">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Cattleman" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d3/Cattleman_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422210033" height = 220px width = 220px> <p>Cattleman</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Cattleman">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Chainsaw" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e8/Chainsaw_topper_icon.png/revision/latest?cb=20161222055203" height = 220px width = 220px> <p>Chainsaw</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Chainsaw">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Chef's Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6c/Chef%27s_Hat_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20170822160854" height = 220px width = 220px> <p>Chef's Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Chef's Hat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Cockroach" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e8/Cockroach_topper_icon.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/257/window-height/256?cb=20200422210224" height = 220px width = 220px> <p>Cockroach</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Cockroach">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Deerstalker" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7f/Deerstalker_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422210224" height = 220px width = 220px> <p>Deerstalker</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Deerstalker">

</form>
</div>
</section>

<section class="itemContainer" >

<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Derby" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/ba/Derby_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20161222055642" height = 220px width = 220px> <p>Derby</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Derby">

</form>
</div>

<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value=Foam Hat name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3c/Foam_Hat_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422213500" height = 220px width = 220px> <p>Foam Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value=Foam Hat>

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Fruit Hat" name="item-enter">    <img src="https://www.rocketprices.com/images/rocket%20league/items/ps4-fruit-hat-Black.png" height = 220px width = 220px> <p>Fruit Hat</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Fruit Hat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Graduation Cap" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a6/Graduation_Cap_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20200422213459" height = 220px width = 220px> <p>Graduation Cap</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Graduation Cap">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hawaiian Lei" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b1/Hawaiian_Lei_topper_icon.png/revision/latest/top-crop/width/360/height/450?cb=20171001123307" height = 220px width = 220px> <p>Hawaiian Lei</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hawaiian Lei">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Heart Glasses" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4f/Heart_Glasses_topper_icon.png/revision/latest?cb=20190221212234" height = 220px width = 220px> <p>Heart Glasses</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Heart Glasses">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Homburg" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9b/Homburg_topper_icon.png/revision/latest?cb=20161222055323" height = 220px width = 220px> <p>Homburg</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Homburg">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hotcakes" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0f/Hotcakes_topper_icon.png/revision/latest?cb=20171001123537" height = 220px width = 220px> <p>Hotcakes</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hotcakes">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Ivy Cap" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cd/Ivy_Cap_topper_icon.png/revision/latest?cb=20161222055324" height = 220px width = 220px> <p>Ivy Cap</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Ivy Cap">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Jack-In-The-Box" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a1/Jack-in-the-Box_topper_icon.png/revision/latest?cb=20171001121933" height = 220px width = 220px> <p>Jack-In-The-Box</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Jack-In-The-Box">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Latte" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0a/Latte_topper_icon.png/revision/latest?cb=20171001121943" height = 220px width = 220px> <p>Latte</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Latte">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Light Bulb" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/73/Light_Bulb_topper_icon.png/revision/latest?cb=20200422212748" height = 220px width = 220px> <p>Light Bulb</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Light Bulb">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Little Bow" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Little_Bow_topper_icon.png/revision/latest?cb=20161222055324" height = 220px width = 220px> <p>Little Bow</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Little Bow">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Little Bunny" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/36/Little_Bunny_topper_icon.png/revision/latest?cb=20171001122020" height = 220px width = 220px> <p>Little Bunny</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Little Bunny">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Little Cow" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c0/Little_Cow_topper_icon.png/revision/latest?cb=20171001122029" height = 220px width = 220px> <p>Little Cow</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Uncommon">
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Little Cow">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Little Dog" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/33/Little_Dog_topper_icon.png/revision/latest?cb=20171001122039" height = 220px width = 220px> <p>Little Dog</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Little Dog">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Little Elephant" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5c/Little_Elephant_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122048" height = 220px width = 220px> <p>Little Elephant</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Little Elephant">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Little Owl" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/84/Little_Owl_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122056" height = 220px width = 220px> <p>Little Owl</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Little Owl">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Little Sloth" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ef/Little_Sloth_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122111" height = 220px width = 220px> <p>Little Sloth</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Little Sloth">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Mouse Trap" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/83/Mouse_Trap_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422213459" height = 220px width = 220px> <p>Mouse Trap</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Topper">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Mouse Trap">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Palm Tree" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/50/Palm_Tree_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190225172550" height = 220px width = 220px> <p>Palm Tree</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Palm Tree">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Paper Boat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c2/Paper_Boat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212747" height = 220px width = 220px> <p>Paper Boat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Paper Boat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Party Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/86/Party_Hat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212747" height = 220px width = 220px> <p>Party Hat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Party Hat">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Pigeon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Pigeon_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212717" height = 220px width = 220px> <p>Pigeon</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Pigeon">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Plunger" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cc/Plunger_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212716" height = 220px width = 220px> <p>Plunger</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Plunger">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Police Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/aa/Police_Hat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212716" height = 220px width = 220px> <p>Police Hat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Police Hat">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Pork Pie" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Pork_Pie_topper_icon.png/revision/latest?cb=20161222055326" height = 220px width = 220px> <p>Pork Pie</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Pork Pie">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Rasta" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/17/Rasta_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212714" height = 220px width = 220px> <p>Rasta</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Rasta">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Rhino Horns" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/94/Rhino_Horns_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212714" height = 220px width = 220px> <p>Rhino Horns</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Rhino Horns">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Shuriken" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/59/Shuriken_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212611" height = 220px width = 220px> <p>Shuriken</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Shuriken">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Swim Ring" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b8/Swim_Ring_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190225172440" height = 220px width = 220px> <p>Swim Ring</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Swim Ring">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Stegosaur" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/ce/Stegosaur_topper_icon.png/revision/latest?cb=20171001123121" height = 220px width = 220px> <p>Stegosaur</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Stegosaur">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Surfboard" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5c/Surfboard_topper_icon.png/revision/latest?cb=20171001122142" height = 220px width = 220px> <p>Surfboard</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Surfboard">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Tiara" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/86/Tiara_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212608" height = 220px width = 220px> <p>Tiara</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Tiara">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Traffic Cone" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c8/Traffic_Cone_topper_icon.png/revision/latest?cb=20161222055458" height = 220px width = 220px> <p>Traffic Cone</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Traffic Cone">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Trucker Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/67/Trucker_Hat_topper_icon.png/revision/latest?cb=20161222055459" height = 220px width = 220px> <p>Trucker Hat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Trucker Hat">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Uncle Sam" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b1/Uncle_Sam_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122850" height = 220px width = 220px> <p>Uncle Sam</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Uncle Sam">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Unicorn" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/17/Unicorn_topper_icon.png/revision/latest?cb=20161222055459" height = 220px width = 220px> <p>Unicorn</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Unicorn">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Visor" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9e/Visor_topper_icon.png/revision/latest?cb=20161222055459" height = 220px width = 220px> <p>Visor</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Visor">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Work Boot" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/22/Work_Boot_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212749" height = 220px width = 220px> <p>Work Boot</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Uncommon">
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Work Boot">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Catfish" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/14/Catfish_topper_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20190408090133" height = 220px width = 220px> <p>Catfish</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Catfish">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Chafed Cherry" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8e/Chafed_Cherry_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122325" height = 220px width = 220px> <p>Chafed Cherry</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Chafed Cherry">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Clamshell" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/31/Clamshell_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422210223" height = 220px width = 220px> <p>Clamshell</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Clamshell">

</form>
</div>
<div id="Topper" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Drink Helmet" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/88/Drink_Helmet_topper_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20190221214426" height = 220px width = 220px> <p>Drink Helmet</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Drink Helmet">

</form>
</div>


<div id="Topper" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Fishbowl" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/ff/Fishbowl_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122346" height = 220px width = 220px> <p>Fishbowl</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Fishbowl">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="MMS Headphones" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/89/MMS_Headphones_topper_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20190221214154" height = 220px width = 220px> <p>MMS Headphones</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="MMS Headphones">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mr. Banana" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/ad/Mr._Banana_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122407" height = 220px width = 220px> <p>Mr. Banana</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Mr. Banana">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mr. Hot Dog" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/50/Mr._Hot_Dog_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122433" height = 220px width = 220px> <p>Mr. Hot Dog</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Mr. Hot Dog">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mr. Hot Pepper" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4c/Mr._Hot_Pepper_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122441" height = 220px width = 220px> <p>Mr. Hot Pepper</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Mr. Hot Pepper">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mrs. Avacado" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a5/Mrs._Avocado_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122451" height = 220px width = 220px> <p>Mrs. Avacado</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Mrs. Avacado">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="ROBO-Visor" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8f/Robo_Visor_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212714" height = 220px width = 220px> <p>ROBO-Visor</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="ROBO-Visor">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Rooster Comb" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/dd/Rooster_Comb_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122828" height = 220px width = 220px> <p>Rooster Comb</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Rooster Comb">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Sad Strawberry" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/04/Sad_Strawberry_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122518" height = 220px width = 220px> <p>Sad Strewberry</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Sad Strawberry">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Wildcat Ears" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f1/Wildcat_Ears_topper_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20190221214122" height = 220px width = 220px> <p>Wildcat Ears</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Wildcat Ears">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Worried Watermelon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/1c/Worried_Watermelon_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122538" height = 220px width = 220px> <p>Worried Watermelon</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Worried Watermelon">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Butterfly" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/ae/Butterfly_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20170930232624" height = 220px width = 220px> <p>Butterfly</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Butterfly">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Dragon Wings" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/35/Dragon_Wings_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171001122335" height = 220px width = 220px> <p>Dragon Wings</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Dragon Wings">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Goldfish" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ee/Goldfish_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190225172643" height = 220px width = 220px> <p>Goldfish</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Goldfish">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Gold Cap" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/07/Gold_Cap_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161223064404" height = 220px width = 220px> <p>Gold Cap</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Gold Cap">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Beat Saber" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/99/Beat_Saber_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20191107224712" height = 220px width = 220px> <p>Beat Saber</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Beat Saber">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Season 1 - Bronze" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/16/Season_1_bronze_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055854" height = 220px width = 220px> <p>Season 1 - Bronze</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Season 1 - Bronze">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Season 1 - Silver" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d5/Season_1_silver_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055856" height = 220px width = 220px> <p>Season 1 - Silver</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Season 1 - Silver">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Season 1 - Gold" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7e/Season_1_gold_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055855" height = 220px width = 220px> <p>Season 1 - Gold</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Season 1 - Gold">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Season 1 - Platinum" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/45/Season_1_platinum_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055855" height = 220px width = 220px> <p>Season 1 - Platinum</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Season 1 - Platinum">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Hot Wheels RC Rivals" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cc/Hot_Wheels_RC_Rivals_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190406092313" height = 220px width = 220px> <p>How Wheels RC Rivals</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Hot Wheels RC Rivals">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Showman" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f5/Showman_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190406092219" height = 220px width = 220px> <p>Showman</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Showman">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Hustle Brows" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/ad/Hustle_Brows_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20170930170947" height = 220px width = 220px> <p>Hustle Brows</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Hustle Brows">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mount Champion" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/75/Mount_Champion_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20170602233200" height = 220px width = 220px> <p>Mount Champion</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Mountain Champion">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Stoic Muffin" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5f/Stoic_Muffin_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180310101507" height = 220px width = 220px> <p>Stoic Muffin</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Stoic Muffin">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Two-Timer" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/36/Two-Timer_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180310101514" height = 220px width = 220px> <p>Two-Timer</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Two-Timer">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Drip Drop" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b2/Drip_Drop_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180901231916" height = 220px width = 220px> <p>Drip Drop</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Drip Drop">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="LFT" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/ce/LFT_topper_icon_paint.png/revision/latest/scale-to-width-down/159?cb=20190303140219" height = 220px width = 220px> <p>LFT</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="LFT">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Battle-Cars Anniversary" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d9/Battle-Cars_Anniversary_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180710195723" height = 220px width = 220px> <p>Battle-Cars Anniversary</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Battle-Cars Anniversary">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Birthday Bash" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3b/Birthday_Bash_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180710195724" height = 220px width = 220px> <p>Birthday Bash</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Birthday Bash">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mr. Pineapple" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Mr_Pineapple_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180614173451" height = 220px width = 220px> <p>Mr. Pineapple</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Mr. Pineapple">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Kayak" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/63/Kayak_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180614173451" height = 220px width = 220px> <p>Kayak</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Kayak">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Buzzer" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9f/Buzzer_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180614173446" height = 220px width = 220px> <p>Buzzer</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Buzzer">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Sand Castle" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/31/Sand_Castle_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180614173453" height = 220px width = 220px> <p>Sand Castle</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Sand Castle">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Bunny Ears" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fb/Bunny_Ears_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20170325065217" height = 220px width = 220px> <p>Bunny Ears</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Bunny Ears">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Easter Basket" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d8/Easter_Basket_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20170325065218" height = 220px width = 220px> <p>Easter Basket</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Easter Basket">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Pastel Eggs" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/57/Pastel_Eggs_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200410190035" height = 220px width = 220px> <p>Pastel Eggs</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Pastel Eggs">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Angel Wings" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/61/Angel_Wings_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171212170221" height = 220px width = 220px> <p>Angel Wings</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Angel Wings">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Fallen Tree" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/77/Fallen_Tree_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171212170103" height = 220px width = 220px> <p>Fallen Tree</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Fallen Tree">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Happy Penguin" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8a/Happy_Penguin_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171212170125" height = 220px width = 220px> <p>Happy Penguin</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Happy Penguin">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Holiday Bow" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/78/Holiday_Bow_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171212170422" height = 220px width = 220px> <p>Holiday Bow</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Holiday">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Snowboard" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c5/Snowboards_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171212170431" height = 220px width = 220px> <p>Snowboard</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Snowboard">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Christmas Cocoa" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a5/Christmas_Cocoa_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20181219005045" height = 220px width = 220px> <p>Christmas Cocoa</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Christmas Cocoa">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Sleigh-Bailed" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/52/Sleigh-Bailed_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20181219005139" height = 220px width = 220px> <p>Sleigh-Bailed</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Sleigh-Bailed">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Gingerbread House" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/94/Gingerbread_House_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20191217050202" height = 220px width = 220px> <p>Gingerbread House</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Gingerbread House">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Happy New Year" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fd/Happy_New_Year_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20191217050205" height = 220px width = 220px> <p>Happy Birthday</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Happy New Year">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Bone King" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5d/Bone_King_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055551" height = 220px width = 220px> <p>Bone King</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Bone King">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Ghost" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/22/Ghost_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055643" height = 220px width = 220px> <p>Ghost</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Ghost">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Pumpkin" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/32/Pumpkin_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212715" height = 220px width = 220px> <p>Pumpkin</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Pumpkin">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Gargoyle" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ea/Gargoyle_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171017164542" height = 220px width = 220px> <p>Gargoyle</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Gargoyle">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Grave Robber" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ea/Grave_Robber_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171017164550" height = 220px width = 220px> <p>Grave Robber</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Grave Robber">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Scarecrow Jack" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/98/Scarecrow_Jack_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171017164558" height = 220px width = 220px> <p>Scarecrow Jack</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Scarecrow Jack">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Undying Love" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/1c/Undying_Love_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20171017164607" height = 220px width = 220px> <p>Undying Love</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Undying Love">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Candy Jack" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e2/Candy_Jack_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20181015182234" height = 220px width = 220px> <p>Candy Jack</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Candy Jack">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Haunted House" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/12/Haunted_House_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20181015182235" height = 220px width = 220px> <p>Haunted House</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Haunted House">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Leaf Litter" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5b/Leaf_Litter_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20191016033909" height = 220px width = 220px> <p>Leaf Litter</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Leaf Liter">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Camp Know Where" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/03/Camp_Know_Where_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20191016033910" height = 220px width = 220px> <p>Camp Know Where</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Camp Know Where">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Blitzen" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a9/Blitzen_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422210031" height = 220px width = 220px> <p>Blitzen</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Blitzen">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Christmas Tree" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/15/Christmas_Tree_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422210222" height = 220px width = 220px> <p>Christmas Tree</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Christmas Tree">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Helper Elf" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f1/Helper_Elf_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055727" height = 220px width = 220px> <p>Helper Elf</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Helper Elf">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="New Year's 2017" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cf/New_Years_2017_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055729" height = 220px width = 220px> <p>New Year's 2017</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="New Year's 2017">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Sad Sapling" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5f/Sad_Sapling_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212713" height = 220px width = 220px> <p>Sad Sapling</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Sad Sapling">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Santa" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/97/Santa_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212611" height = 220px width = 220px> <p>Santa</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Santa">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Paper Dragon" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/32/Paper_Dragon_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200120192647" height = 220px width = 220px> <p>Paper Dragon</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Paper Dragon">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Richie Rat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/36/Richie_Rat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200120192648" height = 220px width = 220px> <p>Richie Rat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Richie Rat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Lantern Fest" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/96/Lantern_Fest_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200120192647" height = 220px width = 220px> <p>Lantern Fest</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Lantern Fest">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Hoverboard" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f0/Hoverboard_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190611020413" height = 220px width = 220px> <p>Hoverboard</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Hoverboard">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Marty Jr." name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/bb/Marty_Jr._topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190611020531" height = 220px width = 220px> <p>Marty Jr.</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Marty Jr.">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Sloth's Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/03/Sloth%27s_Hat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190611020559" height = 220px width = 220px> <p>Candy Jack</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Sloth's Hat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Miyagi-Do" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b6/Miyagi-Do_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190611020640" height = 220px width = 220px> <p>Miyagi-Do</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Miyagi-Do">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Brick Phone" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4d/Brick_Phone_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190702173450" height = 220px width = 220px> <p>Brick Phone</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Brick Phone">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Phat Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/90/Phat_Hat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190702173448" height = 220px width = 220px> <p>Phat Hat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Phat Hat">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Pizza Pixel" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/ad/Pizza_Pixel_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190702173448" height = 220px width = 220px> <p>Pizza Pixel</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Pizza Pixel">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Macho Man" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c9/Macho_Man_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190722182819" height = 220px width = 220px> <p>Mahco Man</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Macho Man">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Voltron" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/bf/Voltron_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190722182820" height = 220px width = 220px> <p>Voltron</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Voltron">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Dizzy Birds" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d7/Dizzy_Birds_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180331042824" height = 220px width = 220px> <p>Dizzy Birds</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Dizzy Birds">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="GG the Clown" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ea/GG_the_Clown_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180331042824" height = 220px width = 220px> <p>GG the Clown</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="GG the Clown">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Webcam" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6a/Webcam_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20191107224716" height = 220px width = 220px> <p>Webcam</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Webcam">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="White Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/86/White_Hat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20200422212606" height = 220px width = 220px> <p>White Hat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="White Hat">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Boombox" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e7/Boombox_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055551" height = 220px width = 220px> <p>Boombox</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Boombox">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Cow Skull" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/ed/Cow_Skull_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055641" height = 220px width = 220px> <p>Cow Skull</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Cow Skull">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mohawk" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/77/Mohawk_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055728" height = 220px width = 220px> <p>Mohawk</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Mohawk">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Slimer" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2a/Slimer_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190616000254" height = 220px width = 220px> <p>Slimer</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Slimer">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Hot Wheels Gorilla" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6c/Hot_Wheels_Gorilla_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190321141207" height = 220px width = 220px> <p>Hot Wheels Gorilla</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Hot Wheels Gorilla">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Hot Wheels Snake" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/59/Hot_Wheels_Snake_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190321141344" height = 220px width = 220px> <p>Hot Wheels Snake</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Hot Wheels Snake">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Hot Wheels Spider" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c0/Hot_Wheels_Spider_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190321141534" height = 220px width = 220px> <p>Hot Wheels Spider</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Hot Wheels Spider">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Jurassic Park Hard Hat" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/da/Jurassic_Park_Hard_Hat_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190321141626" height = 220px width = 220px> <p>Jurassic Park Hard Hat</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Jurassic Park Hard Hat">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="K.I.T.T. Gullwing" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/ce/K.I.T.T._Gullwing_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20191109002747" height = 220px width = 220px> <p>K.I.T.T. Gullwing</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="K.I.T.T. Gullwing">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Cavalier" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/5a/Cavalier_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055554" height = 220px width = 220px> <p>Cavalier</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Cavalier">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Locomotive" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e6/Locomotive_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055728" height = 220px width = 220px> <p>Locomotive</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Locomotive">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Pixelated Shades" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/96/Pixelated_Shades_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055813" height = 220px width = 220px> <p>Pixelated Shades</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Pixelated Shades">

</form>
</div>
</section>

<section class="itemContainer" >
<div id="Topper" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Shark Fin" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/85/Shark_Fin_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20161222055856" height = 220px width = 220px> <p>Shark Fin</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Shark Fin">

</form>
</div>
<div id="Topper" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Pizza Pixel" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/ad/Pizza_Pixel_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190702173448" height = 220px width = 220px> <p>Pizza Pixel</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Pizza Pixel">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Macho Man" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c9/Macho_Man_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190722182819" height = 220px width = 220px> <p>Mahco Man</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Macho Man">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Voltron" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/bf/Voltron_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20190722182820" height = 220px width = 220px> <p>Voltron</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Voltron">

</form>
</div>

<div id="Topper" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Dizzy Birds" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d7/Dizzy_Birds_topper_icon.png/revision/latest/scale-to-width-down/159?cb=20180331042824" height = 220px width = 220px> <p>Dizzy Birds</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="type" value="Topper">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Dizzy Birds">

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
