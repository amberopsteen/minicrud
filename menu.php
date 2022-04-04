<?php
  include("includes/header.php");
  $sql = "SELECT * FROM menu";
  $stmt = $connect->prepare($sql); 
  $stmt->execute();
  $result = $stmt->fetchAll(); 
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
<div class="gerecht_titel">
  <h3>fish dishes</h3>
</div>
<div class="gerecht_titel">
  <h3>vegetables dishes</h3>
</div>
<div class="menu">
  <?php foreach ($result as $object) { ?>
  <div class="dish">
    <div class="image">
    <img id="tournedos" src='media/<?php echo $object['afbeelding'] ?>' />
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
<div class="empty_space"></div>
<?php
      include("includes/footer.php")
    ?>
