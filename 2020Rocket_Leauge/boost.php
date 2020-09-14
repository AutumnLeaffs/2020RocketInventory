<!DOCTYPE html>
<html>
  <head>
    <title>Inventory - Rocket Inventory</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rocket Inventory, the best trade website">
  </head>
  <body>
    <div id="container">

      <div id="header">
        <table cellspacing="10" frame="void">
          <tr>
            <td><a href="index.php">Homepage</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="information.php">Information</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="inventory.php" class="currentpage">Inventory</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="trading.php">Trading</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td><a href="account.php">Account</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
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
          <h1>INVENTORY</h1>
        </div>
        <div id= "subHeader">
           <h5>
            <table cellspacing="10" frame="void">
              <tr>
                <td><a href="inventory.php" >Bodies</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
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
  .bigContainer {
  /*  width: 100%;
    height: 200px;
    background: aqua;
    margin: auto;
    padding: 10px;*/
    display: grid;
    grid-template-rows: 200px;
    grid-gap: 50px;
    position: absolute;

  }
  .container {
  /*  width: 100%;
    height: 200px;
    background: aqua;
    margin: auto;
    padding: 10px;*/
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 200px;
    grid-gap: 50px;
    position: relative;
  left: -115px;
  margin-top: 10px;
  }
  .containerFirst {
  /*  width: 100%;
    height: 200px;
    background: aqua;
    margin: auto;
    padding: 10px;*/
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-gap: 50px;
    position: relative;
  left: -115px;

  }

  #subHeader{
    color:#32DCFF;
    font-family: futura, fantasy, sans-serif;
    text-align: center;
    margin: 0px;
    /*padding: 200px 10px 10px 10px;*/

    width: 1500px;
    margin-left: auto;
    margin-right: auto;
    font-size: 40px;
    font-weight: bolder;

    a {
      text-decoration: none;
      margin: 0;
      padding: 0;
  }
  a:link {
      color: white;
      margin: 0;
      padding: 0;
      text-decoration: none;
      border-bottom: 0
  }
  a:visited {
      color: white;
      margin: 0;
      padding: 0;
      text-decoration: none;
      border-bottom: 0
  }
  a:hover {
      color: white;
      border: 1px solid white;
      margin: 0;
      padding: 0;

  }
  }
  </style>
  <section class="bigContainer">
  <section class="container">

<div id="RocketBoost" class ="one">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Armadillo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3f/Armadillo_body_icon.png/revision/latest?cb=20200514122915" height = 220px width = 220px> <p>Armadillo</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="itemName" value="Armadillo">

</form>
</div>

<div id="RocketBoost" class ="two">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Backfire" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cf/Backfire_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170527083720" height = 220px width = 220px> <p>Backfire</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="itemName" value="Backfire">

</form>
</div>
<div id="RocketBoost" class ="three">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Breakout" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6d/Breakout_body_icon_black.jpg/revision/latest/top-crop/width/300/height/300?cb=20180906025342" height = 220px width = 220px> <p>Breakout</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="itemName" value="Breakout">

</form>
</div>

<div id="RocketBoost" class ="four">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Gizmo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/88/Gizmo_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170526231903" height = 220px width = 220px> <p>Gizmo</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="itemName" value="Gizmo">

</form>
</div>
<div id="RocketBoost" class ="five">
  <form action="includes/items.inc.php" method="post">


            <button type="enter" value="Hogsticker" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Hogsticker_body_icon.png/revision/latest?cb=20200514123302" height = 220px width = 220px> <p>Hogsticker</p></button>

            <div id="selectColor1" class = "dropdown-content">
            <p>Color</p>
            <div id="tColor1" class="dropdown-content">
              <input type="radio" id="Lime" name="paint" value="Lime">
              <label for="Lime">Lime</label><br>
              <input type="radio" id="Black" name="paint" value="Black">
              <label for="Black">Black</label><br>
              <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
              <label for="Burnt Sienna">Burnt Sienna</label><br>
              <input type="radio" id="Cobalt" name="paint" value="Cobalt">
              <label for="Cobalt">Cobalt</label><br>
              <input type="radio" id="Forest Green" name="paint" value="Forest Green">
              <label for="Forest Green">Forest Green</label><br>
              <input type="radio" id="Grey" name="paint" value="Grey">
              <label for="Grey">Grey</label><br>
              <input type="radio" id="Orange" name="paint" value="Orange">
              <label for="Orange">Orange</label><br>
              <input type="radio" id="Pink" name="paint" value="Pink">
              <label for="Pink">Pink</label><br>
              <input type="radio" id="Purple" name="paint" value="Purple">
              <label for="Purple">Purple</label><br>
              <input type="radio" id="Saffron" name="paint" value="Saffron">
              <label for="Saffron">Saffron</label><br>
              <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
              <label for="Sky Blue">Sky Blue</label><br>
              <input type="radio" id="Titanium White" name="paint" value="Titanium White">
              <label for="Titanium White">Titanium White</label><br>
              <input type="radio" id="Crimson" name="paint" value="Crimson">
              <label for="Crimson">Crimson</label><br>
            </div>

           </div>
            <div id="selectCert1" class = "dropdown-content">
              <p>Certification</p>
              <div id="tCert1" class="dropdown-content">
                <input type="radio" id="Acrobat" name="certification" value="Acrobat">
                <label for="Acrobat">Acrobat</label><br>
                <input type="radio" id="Aviator" name="certification"value="Aviator">
                <label for="Aviator">Aviator</label><br>
                <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
                <label for="Goalkeeper">Goalkeeper</label><br>
                <input type="radio" id="Guardian" name="certification"value="Guardian">
                <label for="Guardian">Guardian</label><br>
                <input type="radio" id="Juggler" name="certification"value="Juggler">
                <label for="Juggler">Juggler</label><br>
                <input type="radio" id="Paragon" name="certification"value="Paragon">
                <label for="Paragon">Paragon</label><br>
                <input type="radio" id="Playmaker" name="certification"value="Playmaker">
                <label for="Playmaker">Playmaker</label><br>
                <input type="radio" id="Scorer" name="certification"value="Scorer">
                <label for="Scorer">Scorer</label><br>
                <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
                <label for=">Show-Off">Show-Off</label><br>
                <input type="radio" id=">Sniper" name="certification"value=">Sniper">
                <label for=">Sniper">Sniper</label><br>
                <input type="radio" id=">Striker" name="certification"value=">Striker">
                <label for=">Striker">Striker</label><br>
                <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
                <label for=">Sweeper">Sweeper</label><br>
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
      <input type="hidden" name="itemName" value="Hogsticker">

</form>
</div>
</section>


<section class="container" >

<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hotshot" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/74/Hotshot_body_icon.png/revision/latest?cb=20170528120303" height = 220px width = 220px> <p>Hotshot</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Hotshot">

</form>
</div>

<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Luigi NSR" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/48/Luigi_NSR_body_icon.png/revision/latest/scale-to-width-down/222?cb=20171018221402" height = 220px width = 220px> <p>Luigi NSR</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Luigi NSR">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Mario NSR" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b6/Mario_NSR_body_icon.png/revision/latest/scale-to-width-down/222?cb=20171118115933" height = 220px width = 220px> <p>Mario NSR</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Mario NSR">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Merc" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3f/Merc_body_icon.png/revision/latest?cb=20170528134205" height = 220px width = 220px> <p>Merc</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Merc">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Octane" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f1/Octane_body_icon.png/revision/latest?cb=20170526223331" height = 220px width = 220px> <p>Octane</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Octane">

</form>
</div>
</section>

<section class="container" >

<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Paladin" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a3/Paladin_body_icon.png/revision/latest?cb=20170528155813" height = 220px width = 220px> <p>Paladin</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Paladin">

</form>
</div>

<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Road Hog" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b2/Road_Hog_body_icon.png/revision/latest?cb=20170526232103" height = 220px width = 220px> <p>Road Hog</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Road Hog">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Samus's Gunship" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8c/Samus%27_Gunship_body_icon.png/revision/latest?cb=20171118120002" height = 220px width = 220px> <p>Samus's Gunship</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Samus's Gunship">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Sweet Tooth" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4d/Sweet_Tooth_body_icon.png/revision/latest?cb=20180712054030" height = 220px width = 220px> <p>Sweet Tooth</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Venom" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9e/Venom_body_icon.png/revision/latest?cb=20170528163048" height = 220px width = 220px> <p>Venom</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Venom">

</form>
</div>
</section>
<section class="container" >

<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="X-Devil" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/42/X-Devil_body_icon.png/revision/latest?cb=20170527002826" height = 220px width = 220px> <p>X-Devi</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="X-Devi">

</form>
</div>

<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="'16 Batmobile" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/25/Batmobile_body_icon.png/revision/latest?cb=20170530084440" height = 220px width = 220px> <p>'16 Batmobile</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="'70 Dodge Charger R/T" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3c/%2770_Dodge_Charger_RT_body_icon.png/revision/latest?cb=20171011164220" height = 220px width = 220px> <p>'70 Dodge Charger R/T</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="'70 Dodge Charger R/T">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="'89 Batmobile" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/1/14/%2789_Batmobile_body_icon.png/revision/latest?cb=20180313174159" height = 220px width = 220px> <p>'89 Batmobile</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="'99 Nissan Skyline GT-R R34" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/30/%2799_Nissan_Skyline_GT-R_R34_body_icon.png/revision/latest?cb=20171011165618" height = 220px width = 220px> <p>'99 Nissan Skyline GT-R R34</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="'99 Nissan Skyline GT-R R34">

</form>
</div>
</section>
<section class="container" >

<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Aftershock" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0d/Aftershock_body_icon.png/revision/latest?cb=20170531180025" height = 220px width = 220px> <p>Aftershock</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Aftershock">

</form>
</div>

<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Bone Shaker" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/f1/Bone_Shaker_body_icon.png/revision/latest?cb=20170611123823" height = 220px width = 220px> <p>Bone Shaker</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Bone Shaker">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Delorean Time Machine" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a4/DeLorean_Time_Machine_body_icon.png/revision/latest?cb=20170530114123" height = 220px width = 220px> <p>Delorean Time Machine</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Delorean Time Machine">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Dominus" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2b/Dominus_body_icon.png/revision/latest?cb=20170529160106" height = 220px width = 220px> <p>Dominus</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Dominus">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Ecto-1" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7e/Ecto-1_body_icon.png/revision/latest?cb=20190611224711" height = 220px width = 220px> <p>Ecto-1</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Ecto-1">

</form>
</div>
</section>
<section class="container" >

<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Esper" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b7/Esper_body_icon.png/revision/latest?cb=20170601160458" height = 220px width = 220px> <p>Esper</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Esper">

</form>
</div>

<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Fast 4WD" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9a/Fast_4WD_body_icon.png/revision/latest?cb=20200514152707" height = 220px width = 220px> <p>Fast 4WD</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Fast 4WD">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Gazella GT" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3e/Gazella_GT_body_icon.png/revision/latest?cb=20200514152707" height = 220px width = 220px> <p>Gazella GT</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Gazella GT">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Grog" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2b/Grog_body_icon.png/revision/latest?cb=20170601180352" height = 220px width = 220px> <p>Grog</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Grog">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Ice Charger" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cb/Ice_Charger_body_icon.png/revision/latest?cb=20170530125858" height = 220px width = 220px> <p>Ice Charger</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Ice Charger">

</form>
</div>
</section>
<section class="container" >

<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Jurassic Jeep® Wrangler" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/24/Jurassic_Jeep_Wrangler_body_icon.png/revision/latest?cb=20200514153433" height = 220px width = 220px> <p>Jurassic Jeep® Wrangler</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Jurassic Jeep® Wrangler">

</form>
</div>

<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="K.I.T.T." name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/f/fb/K.I.T.T._body_icon.png/revision/latest?cb=20190820003215" height = 220px width = 220px> <p>K.I.T.T.</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Marauder" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c7/Marauder_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170531202425" height = 220px width = 220px> <p>Marauder</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Marauder">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Masamune" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/53/Masamune_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170601162653" height = 220px width = 220px> <p>Masamune</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Masamune">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="McLaren 570S" name="item-enter">    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Frocketleague.fandom.com%2Fwiki%2FMcLaren_570S&psig=AOvVaw209SNXxIFf6cLxcKo9yyFa&ust=1596468183880000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDfrcvp_OoCFQAAAAAdAAAAABAD" height = 220px width = 220px> <p>McLaren 570S</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="McLaren 570S">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="MR11" name="item-enter">    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Frocketleague.fandom.com%2Fwiki%2FMR11&psig=AOvVaw0PIrik0I2ocLmdrM2BJrMt&ust=1596468255382000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKCM4fDp_OoCFQAAAAAdAAAAABAK" height = 220px width = 220px> <p>Mr11</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="MR11">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Proteus" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a7/Proteus_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170602180218" height = 220px width = 220px> <p>Proteus</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Proteus">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Ripper" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/d7/Ripper_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170602172025" height = 220px width = 220px> <p>Ripper</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Ripper">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Scarab" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e3/Scarab_body_icon.png/revision/latest?cb=20170531162946" height = 220px width = 220px> <p>Scarab</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Scarab">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Takumi" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c7/Takumi_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170529174114" height = 220px width = 220px> <p>Takumi</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Takumi">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="The Dark Knight Rises Tumbler" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/4/4c/The_Dark_Knight_Rises_Tumbler_body_icon.png/revision/latest/window-crop/width/200/x-offset/0/y-offset/0/window-width/221/window-height/220?cb=20180313174200" height = 220px width = 220px> <p>The Dark Knight Rises Tumbler</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Triton" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6d/Breakout_body_icon_black.jpg/revision/latest/top-crop/width/300/height/300?cb=20180906025342" height = 220px width = 220px> <p>Breakout</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Breakout">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Gizmo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/88/Gizmo_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170526231903" height = 220px width = 220px> <p>Gizmo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Gizmo">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hogsticker" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Hogsticker_body_icon.png/revision/latest?cb=20200514123302" height = 220px width = 220px> <p>Hogsticker</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Hogsticker">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Armadillo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3f/Armadillo_body_icon.png/revision/latest?cb=20200514122915" height = 220px width = 220px> <p>Armadillo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Armadillo">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Backfire" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cf/Backfire_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170527083720" height = 220px width = 220px> <p>Backfire</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Backfire">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Breakout" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6d/Breakout_body_icon_black.jpg/revision/latest/top-crop/width/300/height/300?cb=20180906025342" height = 220px width = 220px> <p>Breakout</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Breakout">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Gizmo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/88/Gizmo_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170526231903" height = 220px width = 220px> <p>Gizmo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Gizmo">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hogsticker" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Hogsticker_body_icon.png/revision/latest?cb=20200514123302" height = 220px width = 220px> <p>Hogsticker</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Hogsticker">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Armadillo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3f/Armadillo_body_icon.png/revision/latest?cb=20200514122915" height = 220px width = 220px> <p>Armadillo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Armadillo">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Backfire" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cf/Backfire_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170527083720" height = 220px width = 220px> <p>Backfire</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Backfire">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Breakout" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6d/Breakout_body_icon_black.jpg/revision/latest/top-crop/width/300/height/300?cb=20180906025342" height = 220px width = 220px> <p>Breakout</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Breakout">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Gizmo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/88/Gizmo_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170526231903" height = 220px width = 220px> <p>Gizmo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Gizmo">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hogsticker" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Hogsticker_body_icon.png/revision/latest?cb=20200514123302" height = 220px width = 220px> <p>Hogsticker</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Hogsticker">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Armadillo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3f/Armadillo_body_icon.png/revision/latest?cb=20200514122915" height = 220px width = 220px> <p>Armadillo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Armadillo">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Backfire" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cf/Backfire_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170527083720" height = 220px width = 220px> <p>Backfire</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Backfire">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Breakout" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/6d/Breakout_body_icon_black.jpg/revision/latest/top-crop/width/300/height/300?cb=20180906025342" height = 220px width = 220px> <p>Breakout</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Breakout">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Gizmo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/88/Gizmo_body_icon.png/revision/latest/top-crop/width/300/height/300?cb=20170526231903" height = 220px width = 220px> <p>Gizmo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Gizmo">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Hogsticker" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/08/Hogsticker_body_icon.png/revision/latest?cb=20200514123302" height = 220px width = 220px> <p>Hogsticker</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Hogsticker">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


          <button type="enter" value="Armadillo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/3/3f/Armadillo_body_icon.png/revision/latest?cb=20200514122915" height = 220px width = 220px> <p>Armadillo</p></button>

          <div id="selectColor1" class = "dropdown-content">
          <p>Color</p>
          <div id="tColor1" class="dropdown-content">
            <input type="radio" id="Lime" name="paint" value="Lime">
            <label for="Lime">Lime</label><br>
            <input type="radio" id="Black" name="paint" value="Black">
            <label for="Black">Black</label><br>
            <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
            <label for="Burnt Sienna">Burnt Sienna</label><br>
            <input type="radio" id="Cobalt" name="paint" value="Cobalt">
            <label for="Cobalt">Cobalt</label><br>
            <input type="radio" id="Forest Green" name="paint" value="Forest Green">
            <label for="Forest Green">Forest Green</label><br>
            <input type="radio" id="Grey" name="paint" value="Grey">
            <label for="Grey">Grey</label><br>
            <input type="radio" id="Orange" name="paint" value="Orange">
            <label for="Orange">Orange</label><br>
            <input type="radio" id="Pink" name="paint" value="Pink">
            <label for="Pink">Pink</label><br>
            <input type="radio" id="Purple" name="paint" value="Purple">
            <label for="Purple">Purple</label><br>
            <input type="radio" id="Saffron" name="paint" value="Saffron">
            <label for="Saffron">Saffron</label><br>
            <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
            <label for="Sky Blue">Sky Blue</label><br>
            <input type="radio" id="Titanium White" name="paint" value="Titanium White">
            <label for="Titanium White">Titanium White</label><br>
            <input type="radio" id="Crimson" name="paint" value="Crimson">
            <label for="Crimson">Crimson</label><br>
          </div>

         </div>
          <div id="selectCert1" class = "dropdown-content">
            <p>Certification</p>
            <div id="tCert1" class="dropdown-content">
              <input type="radio" id="Acrobat" name="certification" value="Acrobat">
              <label for="Acrobat">Acrobat</label><br>
              <input type="radio" id="Aviator" name="certification"value="Aviator">
              <label for="Aviator">Aviator</label><br>
              <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
              <label for="Goalkeeper">Goalkeeper</label><br>
              <input type="radio" id="Guardian" name="certification"value="Guardian">
              <label for="Guardian">Guardian</label><br>
              <input type="radio" id="Juggler" name="certification"value="Juggler">
              <label for="Juggler">Juggler</label><br>
              <input type="radio" id="Paragon" name="certification"value="Paragon">
              <label for="Paragon">Paragon</label><br>
              <input type="radio" id="Playmaker" name="certification"value="Playmaker">
              <label for="Playmaker">Playmaker</label><br>
              <input type="radio" id="Scorer" name="certification"value="Scorer">
              <label for="Scorer">Scorer</label><br>
              <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
              <label for=">Show-Off">Show-Off</label><br>
              <input type="radio" id=">Sniper" name="certification"value=">Sniper">
              <label for=">Sniper">Sniper</label><br>
              <input type="radio" id=">Striker" name="certification"value=">Striker">
              <label for=">Striker">Striker</label><br>
              <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
              <label for=">Sweeper">Sweeper</label><br>
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
    <input type="hidden" name="itemName" value="Armadillo">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Nemesis" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c6/Nemesis_body_icon.png/revision/latest?cb=20191004051354" height = 220px width = 220px> <p>Nemesis</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Nemesis">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Ronin" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a4/Ronin_body_icon.png/revision/latest?cb=20200327224118" height = 220px width = 220px> <p>Ronin</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Ronin">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Ronin G1" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/ba/Ronin_G1_body_icon.png/revision/latest?cb=20200327224209" height = 220px width = 220px> <p>Ronin G1</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Ronin G1">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Ronin GXT" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c0/Ronin_GXT_body_icon.png/revision/latest?cb=20200327224342" height = 220px width = 220px> <p>Ronin GXT</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Ronin GXT">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Animus GP" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/a/a5/Animus_GP_body_icon.png/revision/latest?cb=20170705230526" height = 220px width = 220px> <p>Animus GP</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Animus GP">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Breakout Type-S" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/04/Breakout_Type-S_body_icon.png/revision/latest?cb=20170522201553" height = 220px width = 220px> <p>Breakout Type-S</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Breakout Type-S">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Centio V17" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/59/Centio_V17_body_icon.png/revision/latest?cb=20170705230548" height = 220px width = 220px> <p>Centio V17</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Centio V17">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Cyclone" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/73/Cyclone_body_icon.png/revision/latest?cb=20180731165111" height = 220px width = 220px> <p>Cyclone</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Cyclone">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Diestro" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/72/Diestro_body_icon.png/revision/latest?cb=20190225203205" height = 220px width = 220px> <p>Diestro</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Diestro">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Dominus GT" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/98/Dominus_GT_body_icon.png/revision/latest?cb=20170523201643" height = 220px width = 220px> <p>Dominus GT</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Dominus GT">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Endo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/5/59/Endo_body_icon.png/revision/latest?cb=20170520173806" height = 220px width = 220px> <p>Endo</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Endo">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Fennec" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2e/Fennec_body_icon.png/revision/latest?cb=20190704172946" height = 220px width = 220px> <p>Fennec</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Fennec">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Imperator DT5" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e5/Imperator_DT5_body_icon.png/revision/latest?cb=20171204230559" height = 220px width = 220px> <p>Imperator DT5</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Imperator DT5">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Jäger 619 RS" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/bd/J%C3%A4ger_619_RS_body_icon.png/revision/latest?cb=20170928222159" height = 220px width = 220px> <p>Jäger 619 RS</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Jäger 619 RS">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Mantis" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/0/0f/Mantis_body_icon.png/revision/latest?cb=20170625211802" height = 220px width = 220px> <p>Mantis</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Mantis">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Nimbus" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c3/Nimbus_body_icon.png/revision/latest?cb=20181017020831" height = 220px width = 220px> <p>Nimbus</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Nimbus">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Octane ZSR" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2d/Octane_ZSR_body_icon.png/revision/latest?cb=20170527001324" height = 220px width = 220px> <p>Octane ZSR</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Octane ZSR">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Peregrine TT" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8a/Peregrine_TT_body_icon.png/revision/latest?cb=20200623143107" height = 220px width = 220px> <p>Peregrine TT</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Peregrine TT">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Road Hog XL" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/c2/Road_Hog_XL_body_icon.png/revision/latest?cb=20170523152051" height = 220px width = 220px> <p>Road Hog XL</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Road Hog XL">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Samurai" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/9/9a/Samurai_body_icon.png/revision/latest?cb=20180502053558" height = 220px width = 220px> <p>Samurai</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Samurai">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Scarab" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/e/e3/Scarab_body_icon.png/revision/latest?cb=20170531162946" height = 220px width = 220px> <p>Scarab</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Scarab">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Sentinel" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/7/7c/Sentinel_body_icon.png/revision/latest?cb=20191004231129" height = 220px width = 220px> <p>Sentinel</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Sentinel">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Takumi RX-T" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/c/cb/Takumi_RX-T_body_icon.png/revision/latest?cb=20170524181147" height = 220px width = 220px> <p>Takumi RX-T</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Takumi RX-T">

</form>
</div>
<div id="RocketBoost" class ="five">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Twinzer" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/b/b1/Twinzer_body_icon.png/revision/latest?cb=20180602163611" height = 220px width = 220px> <p>Twinzer</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Twinzer">

</form>
</div>


<div id="RocketBoost" class ="one">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Werewolf" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/8/8d/Werewolf_body_icon.png/revision/latest?cb=20180208171815" height = 220px width = 220px> <p>Werewolf</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="Werewolf">

</form>
</div>
</section>
<section class="container" >
<div id="RocketBoost" class ="two">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="X-Devil MK2" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/d/db/X-Devil_Mk2_body_icon.png/revision/latest?cb=20170523153541" height = 220px width = 220px> <p>X-Devil MK2</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
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
<input type="hidden" name="itemName" value="X-Devil MK2">

</form>
</div>
<div id="RocketBoost" class ="three">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Dominus" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/2/2b/Dominus_body_icon.png/revision/latest?cb=20170529160106" height = 220px width = 220px> <p>Dominus</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Exotic">
<input type="hidden" name="type" value="Rocket Boost">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Dominus">

</form>
</div>

<div id="RocketBoost" class ="four">
<form action="includes/items.inc.php" method="post">


  <button type="enter" value="Komodo" name="item-enter">    <img src="https://vignette.wikia.nocookie.net/rocketleague/images/6/65/Komodo_body_icon.png/revision/latest?cb=20200312000922" height = 220px width = 220px> <p>Komodo</p></button>

  <div id="selectColor1" class = "dropdown-content">
  <p>Color</p>
  <div id="tColor1" class="dropdown-content">
    <input type="radio" id="Lime" name="paint" value="Lime">
    <label for="Lime">Lime</label><br>
    <input type="radio" id="Black" name="paint" value="Black">
    <label for="Black">Black</label><br>
    <input type="radio" id="Burnt Sienna" name="paint" value="Burnt Sienna">
    <label for="Burnt Sienna">Burnt Sienna</label><br>
    <input type="radio" id="Cobalt" name="paint" value="Cobalt">
    <label for="Cobalt">Cobalt</label><br>
    <input type="radio" id="Forest Green" name="paint" value="Forest Green">
    <label for="Forest Green">Forest Green</label><br>
    <input type="radio" id="Grey" name="paint" value="Grey">
    <label for="Grey">Grey</label><br>
    <input type="radio" id="Orange" name="paint" value="Orange">
    <label for="Orange">Orange</label><br>
    <input type="radio" id="Pink" name="paint" value="Pink">
    <label for="Pink">Pink</label><br>
    <input type="radio" id="Purple" name="paint" value="Purple">
    <label for="Purple">Purple</label><br>
    <input type="radio" id="Saffron" name="paint" value="Saffron">
    <label for="Saffron">Saffron</label><br>
    <input type="radio" id="Sky Blue" name="paint" value="Sky Blue">
    <label for="Sky Blue">Sky Blue</label><br>
    <input type="radio" id="Titanium White" name="paint" value="Titanium White">
    <label for="Titanium White">Titanium White</label><br>
    <input type="radio" id="Crimson" name="paint" value="Crimson">
    <label for="Crimson">Crimson</label><br>
  </div>

 </div>
  <div id="selectCert1" class = "dropdown-content">
    <p>Certification</p>
    <div id="tCert1" class="dropdown-content">
      <input type="radio" id="Acrobat" name="certification" value="Acrobat">
      <label for="Acrobat">Acrobat</label><br>
      <input type="radio" id="Aviator" name="certification"value="Aviator">
      <label for="Aviator">Aviator</label><br>
      <input type="radio" id="Goalkeeper" name="certification"name="certification"value="Goalkeeper">
      <label for="Goalkeeper">Goalkeeper</label><br>
      <input type="radio" id="Guardian" name="certification"value="Guardian">
      <label for="Guardian">Guardian</label><br>
      <input type="radio" id="Juggler" name="certification"value="Juggler">
      <label for="Juggler">Juggler</label><br>
      <input type="radio" id="Paragon" name="certification"value="Paragon">
      <label for="Paragon">Paragon</label><br>
      <input type="radio" id="Playmaker" name="certification"value="Playmaker">
      <label for="Playmaker">Playmaker</label><br>
      <input type="radio" id="Scorer" name="certification"value="Scorer">
      <label for="Scorer">Scorer</label><br>
      <input type="radio" id=">Show-Off" name="certification"value=">Show-Off">
      <label for=">Show-Off">Show-Off</label><br>
      <input type="radio" id=">Sniper" name="certification"value=">Sniper">
      <label for=">Sniper">Sniper</label><br>
      <input type="radio" id=">Striker" name="certification"value=">Striker">
      <label for=">Striker">Striker</label><br>
      <input type="radio" id=">Sweeper" name="certification"value=">Sweeper">
      <label for=">Sweeper">Sweeper</label><br>
      <input type="radio" id=">Tactician" name="certification"value=">Tactician">
      <label for=">Tactician">Tactician</label><br>
      <input type="radio" id=">Turtle" name="certification"value=">Turtle">
      <label for=">Turtle">Turtle</label><br>
      <input type="radio" id=">Victor" name="certification"value=">Victor">
      <label for=">Victor">Victor</label><br>
    </div>
  </div>



<input type="hidden" name="price" value="0">
<input type="hidden" name="rarity" value="Exotic">
<input type="hidden" name="type" value="Rocket Boost">
<input type="hidden" name="specialEdition" value="0">
<input type="hidden" name="itemName" value="Komodo">

</form>
</div>
</section>


</section>
      <div id="footer">

      </div>

      <style>
        body {background: url(https://steamuserimages-a.akamaihd.net/ugc/80339917954151566/3CB9761163B46FC5F38B822CCD28E7AE9AEFBAB5/); background size: 100% 100%}
      </style>
    </div>
  </body>

</html>
