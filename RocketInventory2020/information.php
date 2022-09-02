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
            <li class="current"><a href="information.php">Information</a></li>
            <li><a href="inventory.php">Inventory</a></li>
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
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Information</h1>
          <p><u><h1>Trading For Beginners</h1></u></p>
          In this section we highlight some basic information and tips that would be helpful to new traders. Even if you are a veteran, read on and you might find something you didn’t know.


          <h1>  What can I trade?</h1>
          Each rocket league profile has an inventory which contains all the items a player has. These items can be used to customize your car (note that all items, with the exception of car bodies, are purely cosmetic and do not affect actual gameplay). If you open your inventory (garage > manage inventory), you can see the items you have. If you are new to trading, it is likely that your inventory is full of common and premium items. Unfortunately, these items cannot be traded (indicated by a yellow clock icon). However, do not fret, for there are many ways for you to obtain items that can be traded to kickstart your trading career. Below is a chart of items that can and can't be traded, as well as how they are obtained.

          <h1> How to Trade</h1>
          The trade mechanic in Rocket League is fairly straightforward, but new players still may have difficulty working out the finer details. To begin a trade, a player must first be in the lobby with another player (either by accepting an invitation, or by creating a party and another player joining). An important thing to note is that although Rocket League does support cross-platform play, only players on the same platform can trade with each other (for instance a player on Xbox cannot trade with a player on PS4). When another player is in the lobby, click on their profile picture and select invite to trade. Upon the other player accepting, you will both be brought into a trade window. Put in the items that you wish to trade, and when you are content with what the other player is offering, select ready. When the other player has also selected ready, a 5 second countdown will begin, during which you or the other player have the opportunity to unready. Upon the completion of the countdown, the trade will complete and you will have the items you traded for.

          <h1>Blueprints</h1>
          Blueprints are special items that are randomly awarded to the player after online matches, or can be obtained from trading with other players. For a set amount of credits, the blueprints can be crafted, which deletes the blueprint and gives the player the item that the blueprint advertised. The items crafted from blueprints can be traded with other players. The amount of credits it takes to craft a blueprint depends on the item type, rarity, and paint. If a player so chooses, he can trade-in 5 blueprints of the same series and rarity (both indicated in the informational box which appears to the right of the inventory when hovering over a blueprint), to obtain 1 blueprint from the same series but of a higher rarity.

          <h1>Credits</h1>
          Credits are the in-game currency which can be purchased in the item shop for real money. They can also be obtained through trading with other players and progressing in the Rocket Pass. Credits can be used to craft blueprints, purchase items from the item shop, purchase the premium Rocket Pass, purchase tiers in the Rocket Pass, and to trade with other players. Note that when trading credits with other players, you must trade at least 10 credits at a time, and it must be in exchange for some item (you cannot trade credits away for nothing).

          <h1>Item Shop</h1>
          The item shop is a way to obtain items if a player wishes to avoid the hassle of trading, or obtain some items which can exclusively be obtained from the item shop. Items in the item shop rotate on a daily basis, and can be bought using credits, which themselves are purchasable in the item shop for real money. Items obtained from the item shop cannot be traded with other players. As a rule of thumb, you should always check to see if you can get an item cheaper from another player before you purchase it from the item shop.

          <h1>Rocket Pass</h1>
          The Rocket Pass is a progression system in which players can earn items and other rewards for playing the game and completing challenges. There are two versions, free and premium. The premium version can be bought for credits and unlocks additional challenges and rewards. All items obtained in the free version can be traded with other players. If the premium pass is owned, after tier 70 the player can continue to advance and earn painted, certified, and special edition versions of items from the first 70 tiers. At any point the premium version can be bought and all the items from the previous premium tiers will be awarded to the player.

          <h1>Special Events</h1>
          Occasionally, often around holidays or special anniversaries, Rocket League will host special events. This often entails limited-time gamemodes and an event shop, with special limited-time items which can only be purchased with the event currency. This event currency is given to the player after completing online multiplayer matches.

          <h1>RLCS Streams</h1>

          <h1>Trade-Ins</h1>
          Trade-ins, not to be confused with player-to-player trading, are a way for players to get rid of their unwanted items in exchange for an item of a higher rarity. The items that can be traded-in are blueprints (see blueprints section for information on how to trade-in blueprints) and uncommon, rare, and very rare items obtained randomly after completing online multiplayer matches*. 5 items of the same rarity can be traded-in for one item of the next-highest rarity (see below).

          *Import items obtained from trading-in 5 very rare items can also be traded-in, however they cannot be obtained after online multiplayer matches.

          <p><u><h1>Tips for Getting Started</h1></u></p>
          Getting started trading can be tough, so here are some tips that can benefit both new and seasoned traders.

          <h1>  Build up your inventory</h1>
          As easy as professional traders might make it seem, it really is difficult to go from nothing to something. A good strategy for getting started is to play online multiplayer matches to earn uncommon/rare/very rare items. On most platforms, these hold value as they offer the opportunity to trade up to sought-after items in the higher tiers of the trade ups. For this reason, a player looking to profit off of these items should trade them up to the very-rare stage and sell them for credits. Keep in mind a trader should always compare what other people are buying and selling items for in order to make an informed decision on how to price their item.

          <h1>  Obtain the Rocket Pass</h1>
          The first major goal in a player’s trading journey should be to get the Rocket Pass. This will allow for the collection of a wide variety of items and faster leveling up (remember valuable items can be obtained after each level up). Also, players are guaranteed to get all their credits back upon reaching tier 120, allowing them to purchase future passes with the same credits. Particularly valuable items are titanium white, black, or crimson special edition items which can be obtained after tier 70.

          <h1>  Start Trading</h1>
          Once you have the Rocket Pass you are well on your way to becoming a true trader. In order to trade, you're going to have to find people to trade with. Great places to start are Reddit, Discord, RLE, RLInsider, LFG (Xbox), or Steam (PC).

          <p><u><h1>How To Stay Safe</h1></u></p>
          blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>About Us</h3>
            <p>This website was developed by Matthew Zhang, Will Gross, and Jake Mead. Over several months, using the internet we taught ourselves web development. It's amazing how many resources are out on the internet to learn web development. From introductionary videos on html to discussion forms on css, there is truely thousands of resources online to teach yourself how to create a website. The culmination of our efforts is this website.</p>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Rocket Inventory, Copyright &copy;</p>
    </footer>
  </body>
</html>
