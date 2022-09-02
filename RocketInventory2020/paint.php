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
              <td><a href="paint.php" class="currentpage">Paints</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
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

#PaintFinish {
max-width:200px;
margin-top: -100px;
}
#PaintFinish:hover #selectColor1  {
  display: block;
  position:relative;
}
#PaintFinish:hover #selectCert1  {
  display: block;
  position: relative;

}
#PaintFinish:hover #submit1  {
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

<div id="PaintFinish" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Corroded Metal" name="item-enter">    <img src="./img/Paint-Finish/Corroded_Metal_paint_finish_icon.png" height = 220px width = 220px> <p>Corroded Metal</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Paint Finish">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Corroded Metal">

</form>
</div>

<div id="PaintFinish" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Glossy" name="item-enter">    <img src="./img/Paint-Finish/Glossy_paint_finish_icon.png" height = 220px width = 220px> <p>Glossy</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Paint Finish">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Glossy">

</form>
</div>
<div id="PaintFinish" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Matte" name="item-enter">    <img src="./img/Paint-Finish/Matte_paint_finish_icon.png" height = 220px width = 220px> <p>Matte</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Paint Finish">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Matte">

</form>
</div>

<div id="PaintFinish" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Metallic" name="item-enter">    <img src="./img/Paint-Finish/Metallic_paint_finish_icon.png" height = 220px width = 220px> <p>Metallic</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Paint Finish">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Metallic">

</form>
</div>
<div id="PaintFinish" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Semigloss" name="item-enter">    <img src="./img/Paint-Finish/Semigloss_paint_finish_icon.png" height = 220px width = 220px> <p>Semigloss</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="type" value="Paint Finish">
      <input type="hidden" name="specialEdition" value="0">
      <input type="hidden" name="itemName" value="Semigloss">

</form>
</div>
</section>


<section class="itemContainer" >

<div id="PaintFinish" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Circuit Board" name="item-enter">    <img src="./img/Paint-Finish/Circuit_Board_paint_finish_icon.png" height = 220px width = 220px> <p>Circuit Board</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Circuit Board">

</form>
</div>

<div id="PaintFinish" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Dino" name="item-enter">    <img src="./img/Paint-Finish/Dino.png.png" height = 220px width = 220px> <p>Dino</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Dino">

</form>
</div>
<div id="PaintFinish" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Feathered" name="item-enter">    <img src="./img/Paint-Finish/Feathered_paint_finish_icon.png" height = 220px width = 220px> <p>Feathered</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Feathered">

</form>
</div>

<div id="PaintFinish" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Glossy Block" name="item-enter">    <img src="./img/Paint-Finish/Glossy_Block_paint_finish_icon.png" height = 220px width = 220px> <p>Glossy Block</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Glossy Block">

</form>
</div>
<div id="PaintFinish" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Grassy" name="item-enter">    <img src="./img/Paint-Finish/Grassy_paint_finish_icon.png" height = 220px width = 220px> <p>Grassy</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
              <input type="radio" id=">Tactician" name="certification"value=">Tactician">
              <label for=">Tactician">Tactician</label><br>
              <input type="radio" id=">Turtle" name="certification"value=">Turtle">
              <label for=">Turtle">Turtle</label><br>
              <input type="radio" id=">Victor" name="certification"value=">Victor">
              <label for=">Victor">Victor</label><br>
            </div>
          </div>



    <input type="hidden" name="price" value="0">
    <input type="hidden" name="rarity" value="Grassy">
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Grassy">

</form>
</div>
</section>

<section class="itemContainer" >

<div id="PaintFinish" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Pearlescent (Matte)" name="item-enter">    <img src="./img/Paint-Finish/Pearlescent_Matte_paint_finish_icon.png" height = 220px width = 220px> <p>Pearlescent (Matte)</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Pearlescent (Matte)">

</form>
</div>

<div id="PaintFinish" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Toon Sketch" name="item-enter">    <img src="./img/Paint-Finish/Toon_Sketch_paint_finish_icon.png" height = 220px width = 220px> <p>Toon Sketch</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Toon Sketch">

</form>
</div>
<div id="PaintFinish" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Anodized" name="item-enter">    <img src="./img/Paint-Finish/Anodized_paint_finish_icon.png" height = 220px width = 220px> <p>Anodized</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Anodized">

</form>
</div>

<div id="PaintFinish" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Anodized Pearl" name="item-enter">    <img src="./img/Paint-Finish/Anodized_Pearl_paint_finish_icon.png" height = 220px width = 220px> <p>Anodized Pearl</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Anodized Pearl">

</form>
</div>
<div id="PaintFinish" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Burlap" name="item-enter">    <img src="./img/Paint-Finish/Burlap_paint_finish_icon.png" height = 220px width = 220px> <p>Burlap</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Burlap">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="PaintFinish" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Cookie Dough" name="item-enter">    <img src="./img/Paint-Finish/Cookie_Dough_paint_finish_icon.png" height = 220px width = 220px> <p>Cookie Dough</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Cookie Dough">

</form>
</div>

<div id="PaintFinish" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Knitted Yarn" name="item-enter">    <img src="./img/Paint-Finish/Knitted_Yarn_paint_finish_icon.png" height = 220px width = 220px> <p>Knitted Yarn</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Knitted Yarn">

</form>
</div>
<div id="PaintFinish" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Metallic (Smooth)" name="item-enter">    <img src="./img/Paint-Finish/Metallic_Smooth_paint_finish_icon.png" height = 220px width = 220px> <p>Metallic (Smooth)</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Metallic (Smooth)">

</form>
</div>

<div id="PaintFinish" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Metallic Pearl (Smooth)" name="item-enter">    <img src="./img/Paint-Finish/Metallic_Pearl_Smooth_paint_finish_icon.png" height = 220px width = 220px> <p>Metallic Pearl (Smooth)</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Metallic Pearl (Smooth)">

</form>
</div>
<div id="PaintFinish" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Moon Rock" name="item-enter">    <img src="./img/Paint-Finish/Moon_Rock_paint_finish_icon.png" height = 220px width = 220px> <p>Moon Rock</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Moon Rock">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="PaintFinish" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Straight-Line" name="item-enter">    <img src="./img/Paint-Finish/Straight-Line_paint_icon.png" height = 220px width = 220px> <p>Straight-Line</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Straight-Line">

</form>
</div>

<div id="PaintFinish" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Furry" name="item-enter">    <img src="./img/Paint-Finish/Furry_paint_finish_icon.png" height = 220px width = 220px> <p>Furry</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Furry">

</form>
</div>
<div id="PaintFinish" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Zebra" name="item-enter">    <img src="./img/Paint-Finish/Zebra_paint_finish_icon.png" height = 220px width = 220px> <p>Zebra</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Zebra">

</form>
</div>

<div id="PaintFinish" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Brushed Metal" name="item-enter">    <img src="./img/Paint-Finish/Brushed_Metal_paint_finish_icon.png" height = 220px width = 220px> <p>Brushed Metal</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Brushed Metal">

</form>
</div>
<div id="PaintFinish" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Camo" name="item-enter">    <img src="./img/Paint-Finish/Camo_paint_finish_icon.png" height = 220px width = 220px> <p>Camo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Camo">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="PaintFinish" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Carbon Fiber" name="item-enter">    <img src="./img/Paint-Finish/Carbon_Fiber_paint_finish_icon.png" height = 220px width = 220px> <p>Carbon Fiber</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Carbon Fiber">

</form>
</div>

<div id="PaintFinish" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Metallic Pearl" name="item-enter">    <img src="./img/Paint-Finish/Metallic_Pearl_paint_finish_icon.png" height = 220px width = 220px> <p>Metallic Pearl</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Metallic Pearl">

</form>
</div>
<div id="PaintFinish" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Pearlescent" name="item-enter">    <img src="./img/Paint-Finish/Pearlescent_paint_finish_icon.png" height = 220px width = 220px> <p>Pearlescent</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Pearlescent">

</form>
</div>

<div id="PaintFinish" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Sun-Damaged" name="item-enter">    <img src="./img/Paint-Finish/Sun-Damaged_paint_finish_icon.png" height = 220px width = 220px> <p>Sun-Damaged</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Sun-Damaged">

</form>
</div>
<div id="PaintFinish" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Toon Glossy" name="item-enter">    <img src="./img/Paint-Finish/Toon_Glossy_paint_finish_icon.png" height = 220px width = 220px> <p>Toon Glossy</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Toon Glossy">

</form>
</div>
</section>
<section class="itemContainer" >

<div id="PaintFinish" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Toon Matte" name="item-enter">    <img src="./img/Paint-Finish/Toon_Matte_paint_finish_icon.png" height = 220px width = 220px> <p>Toon Matte</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Toon Matte">

</form>
</div>

<div id="PaintFinish" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Toon Wood" name="item-enter">    <img src="./img/Paint-Finish/Toon_Wood_paint_finish_icon.png" height = 220px width = 220px> <p>Toon Wood</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Toon Wood">

</form>
</div>

<div id="PaintFinish" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Wood" name="item-enter">    <img src="./img/Paint-Finish/Wood_paint_finish_icon.png" height = 220px width = 220px> <p>Wood</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="type" value="Paint Finish">
    <input type="hidden" name="specialEdition" value="0">
    <input type="hidden" name="itemName" value="Wood">

</form>
</div>

</section>


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
