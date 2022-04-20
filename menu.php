<?php
  include("includes/header.php");

  if (!empty($_POST)){
    $search = $_POST['search'];
    $sql = "SELECT * FROM menu WHERE naam LIKE '%". $search. "%'";
  } else {
    $sql = "SELECT * FROM menu";
  }
  
  
  $stmt = $connect->prepare($sql); 
  $stmt->execute();
  $result = $stmt->fetchAll();
  
  $vlees = [];
  $vis = [];
  $groente = [];

foreach ($result as $menu) {
  switch ($menu['soort_gerecht']) {
      case 'vlees':
          array_push($vlees, $menu);
          break;
      case 'vis':
          array_push($vis, $menu);
          break;
      case 'groente':
          array_push($groente, $menu);
          break;
      default:
          break;
  }
}
?>
<div class="titel_menu">
  <h3>menu</h3>
</div>
<form action="menu.php" method="POST">
<div class="search_button">
  <div class="search-box">
    <input name="search" type="text" />
    <span></span>
  </div>
</div>
</form>
<div class="gerecht_titel">
  <h3>meat dishes</h3>
</div>
<div class="menu">
  <?php foreach ($vlees as $gerecht) { ?>
  <div class="dish">
    <div class="image">
    <img id="tournedos" src='media/<?php echo $gerecht['afbeelding'] ?>'/>
    </div>
    <div class="product">
      <h2><?php echo $gerecht['naam'] ?></h2>
      <h3>€<?php echo $gerecht['prijs'] ?></h3>
      <p class="desc">
        <?php echo $gerecht['omschrijving']?>
      </p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
  <?php }  ?>
</div>
<div class="gerecht_titel">
  <h3 id="haddock">fish dishes</h3>
</div>
<div class="menu">
  <?php foreach ($vis as $gerecht) { ?>
  <div class="dish">
    <div class="image">
    <img id="tournedos" src='media/<?php echo $gerecht['afbeelding'] ?>'/>
    </div>
    <div class="product">
      <h2><?php echo $gerecht['naam'] ?></h2>
      <h3>€<?php echo $gerecht['prijs'] ?></h3>
      <p class="desc">
        <?php echo $gerecht['omschrijving']?>
      </p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
  <?php }  ?>
</div>
<div class="gerecht_titel">
  <h3>vegetables dishes</h3>
</div>
<div class="menu">
  <?php foreach ($groente as $gerecht) { ?>
  <div class="dish">
    <div class="image">
    <img id="tournedos" src='media/<?php echo $gerecht['afbeelding'] ?>'/>
    </div>
    <div class="product">
      <h2><?php echo $gerecht['naam']?></h2>
      <h3>€<?php echo $gerecht['prijs']?></h3>
      <p class="desc">
        <?php echo $gerecht['omschrijving']?>
      </p>
      <div class="button">
        <button>Add to shopping cart</button>
      </div>
    </div>
  </div>
  <?php }  ?>
</div>
<div class="empty_space"></div>
<?php
      include("includes/footer.php")
    ?>
  
