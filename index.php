 <?php
      include("includes/header.php")
    ?>
    <div class="carousel">
    <a href="#favoriet" id="favoriet"><div class="arrow"></div></a>
      <div class="carousel-item">
        <div class="first"></div>
      </div>
      <div class="carousel-item">
        <div class="second"></div>
      </div>
      <div class="carousel-item">
        <div class="third"></div>
      </div>
    </div>
    <div class="title_favorites">
      <h3>chef's favorites</h3>
      </div>
    <div class="favorites">
    <div class="favorites_content">
      <div class="card_one">
        <h3>Grilled Tournedos</h3>
        <a href="menu.php" class="button" >Go to dish</a>
      </div>
    <div class="card_two">
    <h3>GRILLED PORK BELLY</h3>
        <a href="menu.php" class="button">Go to dish</a>
    </div>
  <div class="card_three">
  <h3>GRILLED HADDOCK</h3>
        <a href="menu.php#haddock" class="button">Go to dish</a>
  </div>
</div>
    </div>
    <div class="background_landing">
      <div class="background_book">
        <div class="book">
          <form>
            <h2>book your table here</h2>
            <p type="Name:"><input placeholder="Type your name.."></input></p>
            <p type="E-mail:"><input placeholder="Type your email.."></input></p>
            <p type="Message:"><input placeholder="Type your message here.."></input></p>
            <button>Submit</button>
          </form>
        </div>
      </div>
    </div>
    <?php
      include("includes/footer.php")
    ?>