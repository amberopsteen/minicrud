<?php
      include("includes/header.php");
      $sql = "SELECT * FROM menu";
      $stmt = $connect->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();

      foreach ($result as $object) {
        echo $object['naam'];
      }
    ?>
    <div class="titel_menu">
      <h3>menu</h3>
</div>
<div class="search_button">
	<div class="search-box">
		<input type="text" />
		<span></span>
	</div>
</div>
    <div class="gerecht_titel">
      <h3>meat dishes</h3>
    </div>
    <div class="menu">
      <div class="dish">
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
      <div class="dish">
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
      <div class="dish">
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
      <div class="dish">
        <div class="images">
          <img src="./media/Afbeelding7.jpg" />
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
      <div class="dish">
        <div class="images">
          <img id="tournedos" src="./media/Afbeelding6.jpg" />
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
      <div class="dish">
        <div class="images">
          <img src="./media/Afbeelding5.jpg"/>
        </div>
        <div class="product">
          <h2>Grilled tilapia</h2>
          <h3>20,-</h3>
          <p class="desc">Grilled tilapia | pearl couscous | lemon | thyme</p>
          <div class="buttons">
            <button class="add">Toevoegen</button>
          </div>
        </div>
      </div>
      <div class="dish">
        <div class="images">
          <img src="./media/Afbeelding4.jpg" />
        </div>
        <div class="product">
          <h2>Grilled eel</h2>
          <h3>25,-</h3>
          <p class="desc">Grilled eel | spring union | lemon | thyme</p>
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
      <div class="dish">
        <div class="images">
          <img id="tournedos" src="./media/Afbeelding2.jpg" />
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
        <div class="dish">
          <div class="images">
            <img src="./media/Afbeelding3.jpg" />
          </div>
          <div class="product">
            <h2>Grilled vegetarian meatballs</h2>
            <h3>20,-</h3>
            <p class="desc">Grilled vegetables | vegetarian meatballs | herbs | olive oil</p>
            <div class="buttons">
              <button class="add">Toevoegen</button>
            </div>
          </div>
        </div>
      </div>
      <div class="empty_space"></div>
      <?php
      include("includes/footer.php")
    ?>
    <script src="js/main.js"></script>
  </body>
</html>
