<?php
      include("includes/header.php");
      $sql = "SELECT * FROM menu WHERE soort_gerecht = 'vlees'";
      $stmt = $connect->prepare($sql); $stmt->execute(); $result =
$stmt->fetchAll(); ?>
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
  <?php foreach ($result as $object) { ?>
  <div class="dish">
    <div class="image">
      <img id="tournedos" />
    </div>
    <div class="product">
      <h2><?php echo $object['naam'] ?></h2>
      <h3>€<?php echo $object['prijs'] ?></h3>
      <p class="desc">
        <?php echo $object['omschrijving']?>
      </p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
  <?php }  ?>
</div>
<div id="haddock" class="gerecht_titel">
  <h3>fish dishes</h3>
</div>
<div class="menu">
  <div class="dish">
    <div class="image">
      <img id="tournedos" src="./media/Afbeelding6.jpg" />
    </div>
    <div class="product">
      <h2>Grilled haddock</h2>
      <h3>25,-</h3>
      <p class="desc">Grilled haddock | tomatoes | lemon | dill</p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
  <div class="dish">
    <div class="image">
      <img src="./media/Afbeelding5.jpg" />
    </div>
    <div class="product">
      <h2>Grilled tilapia</h2>
      <h3>20,-</h3>
      <p class="desc">Grilled tilapia | pearl couscous | lemon | thyme</p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
  <div class="dish">
    <div class="image">
      <img src="./media/Afbeelding4.jpg" />
    </div>
    <div class="product">
      <h2>Grilled eel</h2>
      <h3>25,-</h3>
      <p class="desc">Grilled eel | spring union | lemon | thyme</p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
</div>
<div class="gerecht_titel">
  <h3>vegetables dishes</h3>
</div>
<div class="menu">
  <div class="dish">
    <div class="image">
      <img id="tournedos" src="./media/Afbeelding2.jpg" />
    </div>
    <div class="product">
      <h2>Grilled beetroot</h2>
      <h3>18,-</h3>
      <p class="desc">Grilled beetroot | basil | garlic | olive oil</p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
  <div class="dish">
    <div class="image">
      <img src="./media/Afbeelding3.jpg" />
    </div>
    <div class="product">
      <h2>Grilled vegetarian meatballs</h2>
      <h3>20,-</h3>
      <p class="desc">
        Grilled vegetables | vegetarian meatballs | herbs | olive oil
      </p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
</div>
<div class="empty_space"></div>
<?php
      include("includes/footer.php")
    ?>
