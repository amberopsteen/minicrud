<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="media/favicon" href="./media/grill_logo.jpg" />
    <title>Grillmasters</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div id="navbar" class="navbar">
      <ul>
        <div class="logo">
          <h1>on.the.stone</h1>
          <p>Grill and drinks</p>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="reserveren.php">Reserve a table</a></li>
        <div id="mainButton">
          <div class="btn-text" onclick="openForm()">Login</div>
          <div class="modal">
            <div class="close-button" onclick="closeForm()">x</div>
            <div class="form-title">Login</div>
            <div class="input-group">
              <input type="text" id="name" onblur="checkInput(this)" />
              <label for="name">Username</label>
            </div>
            <div class="input-group">
              <input type="password" id="password" onblur="checkInput(this)" />
              <label for="password">Password</label>
            </div>
            <div class="form-button" onclick="closeForm()">Go</div>
          </div>
        </div>
        <li>
          <a href="shoppingcart.php"><img src="./media/cart10.png" /></a>
        </li>
      </ul>
    </div>
    <script src="js/main.js"></script>
    <?php
      require_once("includes/connector.php")
    ?>
  </body>
</html>
