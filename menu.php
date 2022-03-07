<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
    <div class="titel_menu">
      <h3>menu</h3>
    </div>
    <div class="filter">
      <form
        class="example"
        action="/action_page.php"
        style="margin: auto; max-width: 300px"
      >
        <input type="text" placeholder="Search.." name="search2" />
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="gerecht_titel">
      <h3>meat dishes</h3>
    </div>
    <div class="menu">
      <div class="container1">
        <div class="images">
          <img id="tournedos" src="./media/menu_5.jpg" />
        </div>
        <div class="product">
          <h2>Grilled tournedos</h2>
          <h3>30,-</h3>
          <p class="desc">
            Tournedos mousseline | ratatouille | paddenstoelen | jus
          </p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
      <div class="container1">
        <div class="images">
          <img src="./media/menu_6.jpg" />
        </div>
        <div class="product">
          <h2>Grilled pork belly</h2>
          <h3>20,-</h3>
          <p class="desc">meest malste stuk van de rund | kruidencrème</p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
      <div class="container1">
        <div class="images">
          <img src="./media/menu_3.jpg" />
        </div>
        <div class="product">
          <h2>Grilled beef steak</h2>
          <h3>30,-</h3>
          <p class="desc">
            zalmfilet│ rozemarijn│ honing│ crème van mierikswortel
          </p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
      <div class="container1">
        <div class="images">
          <img src="./media/menu.jpg" />
        </div>
        <div class="product">
          <h2>Grilled steak</h2>
          <h3>30,-</h3>
          <p class="desc">
            200 gram, met saus naar keuze:
            stroganoffsaus/pepersaus/champignonsaus of gebakken uien en
            champignons.
          </p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
    </div>
    <div class="gerecht_titel">
      <h3>fish dishes</h3>
    </div>
    <div class="menu">
      <div class="container1">
        <div class="images">
          <img id="tournedos" src="./media/menu_7.jpg" />
        </div>
        <div class="product">
          <h2>Grilled haddock</h2>
          <h3>25,-</h3>
          <p class="desc">Grilled haddock | tomatoes | lemon | dill</p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
      <div class="container1">
        <div class="images">
          <img src="./media/menu_6.jpg" />
        </div>
        <div class="product">
          <h2>Grilled pork belly</h2>
          <h3>20,-</h3>
          <p class="desc">meest malste stuk van de rund | kruidencrème</p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
    </div>
    <div class="gerecht_titel">
      <h3>vegetables dishes</h3>
    </div>
    <div class="menu">
      <div class="container1">
        <div class="images">
          <img id="tournedos" src="./media/menu_groente.jpg" />
        </div>
        <div class="product">
          <h2>Grilled beetroot</h2>
          <h3>18,-</h3>
          <p class="desc">Grilled beetroot | basil | garlic | olive oil</p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
      <div class="container1">
        <div class="images">
          <img src="./media/menu_6.jpg" />
        </div>
        <div class="product">
          <h2>Grilled pork belly</h2>
          <h3>20,-</h3>
          <p class="desc">meest malste stuk van de rund | kruidencrème</p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
