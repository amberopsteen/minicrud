<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grillmasters</title>
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
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true" />
        <div class="login">
          <form>
            <label for="chk" aria-hidden="true">Log in</label>
            <input 
				type="email" 
				name="email" 
				placeholder="Email" 
				required="" />
            <input
              type="password"
              name="pswd"
              placeholder="Password"
              required=""
            />
            <button>Log in</button>
          </form>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
