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

#Trail {
max-width:200px;
margin-top: -100px;
}
#Trail:hover #selectColor1  {
  display: block;
  position:relative;
}
#Trail:hover #selectCert1  {
  display: block;
  position: relative;

}
#Trail:hover #submit1  {
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

<div id="Trail" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Blazer" name="item-enter">    <img src="./img/trail/blazer.png" height = 220px width = 220px> <p>Blazer</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Trail">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Blazer">

</form>
</div>

<div id="Trail" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Candy Cane" name="item-enter">    <img src="./img/trail/Candy_Cane.png" height = 220px width = 220px> <p>Candy Cane</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Trail">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Candy Cane">

</form>
</div>
<div id="Trail" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Discotheque" name="item-enter">    <img src="./img/trail/Discotheque.png" height = 220px width = 220px> <p>Discotheque</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Trail">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Discotheque">

</form>
</div>

<div id="Trail" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="EKG-OMG" name="item-enter">    <img src="./img/trail/EKG_OMG.png" height = 220px width = 220px> <p>EKG-OMG</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Trail">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="EKG-OMG">

</form>
</div>
<div id="Trail" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Friction" name="item-enter">    <img src="./img/trail/Friction.png" height = 220px width = 220px> <p>Friction</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Trail">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Friction">

</form>
</div>
</section>


<section class="itemContainer" >

<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hot Rocks" name="item-enter">    <img src="./img/trail/Hot_Rocks.png" height = 220px width = 220px> <p>Hot Rocks</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hot Rocks">

</form>
</div>

<div id="Trail" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Lightning" name="item-enter">    <img src="./img/trail/Lightning.png" height = 220px width = 220px> <p>Lightning</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Lightning">

</form>
</div>
<div id="Trail" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Lightspeed" name="item-enter">    <img src="./img/trail/Lightspeed.png" height = 220px width = 220px> <p>Lightspeed</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Lightspeed">

</form>
</div>

<div id="Trail" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Luminous" name="item-enter">    <img src="./img/trail/Luminous.png" height = 220px width = 220px> <p>Luminous</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Luminous">

</form>
</div>
<div id="Trail" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Righteous Gale" name="item-enter">    <img src="./img/trail/Righteous_Gale.png" height = 220px width = 220px> <p>Righteous Gale</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Righteous Gale">

</form>
</div>
</section>

<section class="itemContainer" >

<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Zigzag" name="item-enter">    <img src="./img/trail/Zigzag.png" height = 220px width = 220px> <p>Zigzag</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Zigzag">

</form>
</div>

<div id="Trail" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Season 4 - Bronze" name="item-enter">    <img src="./img/trail/Season_4_Bronze.png" height = 220px width = 220px> <p>Season 4- Silver</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Season 4 - Bronze">

</form>
</div>
<div id="Trail" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Season 4 - Silver" name="item-enter">    <img src="./img/trail/Season_4_Silver.png" height = 220px width = 220px> <p>Season 4 - Silver</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Season 4 - Silver">

</form>
</div>

<div id="Trail" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Season 4 - Gold" name="item-enter">    <img src="./img/trail/s4_Gold.png" height = 220px width = 220px> <p>Season 4 - Gold</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Season 4 - Gold">

</form>
</div>
<div id="Trail" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Season 4 - Platinum" name="item-enter">    <img src="./img/trail/s4_plat.png" height = 220px width = 220px> <p>Season 4 - Platinum</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Season 4 - Platinum">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Season 4 - Diamond" name="item-enter">    <img src="./img/trail/s4_diamo.png" height = 220px width = 220px> <p>Season 4 - Diamond</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Season 4 - Diamond">

</form>
</div>

<div id="Trail" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Season 4 - Champion" name="item-enter">    <img src="./img/trail/s4_champ.png" height = 220px width = 220px> <p>Season 4 - Champion</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Season 4 - Champion">

</form>
</div>
<div id="Trail" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Winter Storm" name="item-enter">    <img src="./img/trail/Winter_Storm.png" height = 220px width = 220px> <p>Winter Storm</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Winter Storm">

</form>
</div>

<div id="Trail" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Xmas Lights" name="item-enter">    <img src="./img/trail/Xmas_Lights.png" height = 220px width = 220px> <p>Xmas Lights</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Xmas Lights">

</form>
</div>
<div id="Trail" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hallowtide" name="item-enter">    <img src="./img/trail/Hallowtide_trail.png" height = 220px width = 220px> <p>Hallowtide</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hallowtide">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Ruckus" name="item-enter">    <img src="./img/trail/Ruckus.png" height = 220px width = 220px> <p>Ruckus</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Ruckus">

</form>
</div>

<div id="Trail" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Rainbow" name="item-enter">    <img src="./img/trail/Rainbow.png" height = 220px width = 220px> <p>Rainbow</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Rainbow">

</form>
</div>
<div id="Trail" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="EQ" name="item-enter">    <img src="./img/trail/Equalizer.png" height = 220px width = 220px> <p>EQ</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="EQ">

</form>
</div>

<div id="Trail" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Laser Wave I" name="item-enter">    <img src="./img/trail/Laser_Wave_I.png" height = 220px width = 220px> <p>Laser Wave I</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Laser Wave I">

</form>
</div>
<div id="Trail" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Laser Wave II" name="item-enter">    <img src="./img/trail/Laser_Wave_II.png" height = 220px width = 220px> <p>Laser Wave II</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Laser Wave II">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Laser Wave III" name="item-enter">    <img src="./img/trail/Laser_Wave_III.png" height = 220px width = 220px> <p>Laser Wave III</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Laser Wave III">

</form>
</div>

<div id="Trail" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Tachyon I" name="item-enter">    <img src="./img/trail/Tachyon_I.jpg" height = 220px width = 220px> <p>Tachyon I</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Tachyon I">

</form>
</div>
<div id="Trail" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Tachyon II" name="item-enter">    <img src="./img/trail/Tachyon_II.jpg" height = 220px width = 220px> <p>Tachyon II</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Tachyon II">

</form>
</div>

<div id="Trail" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Tachyon III" name="item-enter">    <img src="./img/trail/Tachyon_III.jpg" height = 220px width = 220px> <p>Tachyon III</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Tachyon III">

</form>
</div>
<div id="Trail" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hack Swerve I" name="item-enter">    <img src="./img/trail/Hack_Swerve_I.png" height = 220px width = 220px> <p>Hack Swerve I</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hack Swerve I">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hack Swerve II" name="item-enter">    <img src="./img/trail/Hack_Swerve_II.png" height = 220px width = 220px> <p>Hack Swerve II</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hack Swerve II">

</form>
</div>

<div id="Trail" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hack Swerve III" name="item-enter">    <img src="./img/trail/Hack_Swerve_III.png" height = 220px width = 220px> <p>Hack Swerve III</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Hack Swerve III">

</form>
</div>

<div id="Trail" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Rally Tracks I" name="item-enter">    <img src="./img/trail/Rally_Tracks_I.png" height = 220px width = 220px> <p>Rally Tracks I</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Rally Tracks I">

</form>
</div>
<div id="Trail" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Rally Tracks II" name="item-enter">    <img src="./img/trail/Rally_Tracks_II.png" height = 220px width = 220px> <p>Rally Tracks II</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Rally Tracks II">

</form>
</div>


<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Flowers" name="item-enter">    <img src="./img/trail/Flowers.png" height = 220px width = 220px> <p>Flowers</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Flowers">

</form>
</div>
</section>
<section class="itemContainer" >
<div id="Trail" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Yokai" name="item-enter">    <img src="./img/trail/Yokai_trail.png" height = 220px width = 220px> <p>Yokai</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Yokai">

</form>
</div>
<div id="Trail" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Vaporstream" name="item-enter">    <img src="./img/trail/Vaporstream.png" height = 220px width = 220px> <p>Vaporstream</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Vaporstream">

</form>
</div>

<div id="Trail" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Rad Rock" name="item-enter">    <img src="./img/trail/Rad_Rock.png" height = 220px width = 220px> <p>Rad Rock</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Rad Rock">

</form>
</div>
<div id="Trail" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="HoloData" name="item-enter">    <img src="./img/trail/HoloData.png" height = 220px width = 220px> <p>HoloData</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="HoloData">

</form>
</div>


<div id="Trail" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Excavator" name="item-enter">    <img src="./img/trail/Excavator.png" height = 220px width = 220px> <p>Excavator</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Trail">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Excavator">

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
