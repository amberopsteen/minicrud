<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grillmasters</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div id="navbar" class="navbar">
      <div class="navbar_content">
        <div class="logo">
          <h1>on.the.stone</h1>
          <p>Grill and drinks</p>
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="reserveren.php">Reserve a table</a></li>
          <div id="login_button">
            <div class="text_button" onclick="openForm()">Login</div>
            <form action="php/login.php" method="POST" class="login_page">
              <div class="close_button" onclick="closeForm()">x</div>
              <div class="form_title">Login</div>
              <div class="input-group">
                <input type="text" name="gebruikersnaam" id="name" onblur="checkInput(this)" />
                <label for="name">Username</label>
              </div>
              <div class="input-group">
                <input
                  type="password"
                  id="password"
                  onblur="checkInput(this)"
                />
                <label for="password">Password</label>
              </div>
              <button type='submit' name='submit' class="form-button" onclick="closeForm()">submit</button>
            </form>
          </div>
          <li>
            <div class="cart">
            <a href="shoppingcart.php"><img src="./media/shopping_cart.png" /></a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <?php
      require_once("includes/connect.php")
    ?>
