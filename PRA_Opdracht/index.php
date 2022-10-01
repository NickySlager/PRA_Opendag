<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
  <!-- banner + nav  -->
    <div class="banner">
        <div class="header-navbar">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="header-nav" id="color-nav">
                <nav>
                    <a  href="">VMBO</a>
                    <a  href="">MBO</a>
                    <a  href="">Cursus</a>
                    <a  href="">Vavo</a>
                    <a  href="">Inloggen</a>
                </nav>
            </div>
        </div>
        <div class="banner-body">
            <div class="headliner">
                <h1>Welke uitdaging ga jij aan?</h1>
                <p>Welkom bij curio de beroepsopleider in de regio</p>
                <div class="headliner-nav">
                    <div class="headliner-column">
                        <nav>
                            <img src="img/arrow.png"/><a href="">MBO opleidingen</a>
                            <img src="img/arrow.png"/><a href="">VMBO scholen</a>
                            <img src="img/arrow.png"/><a href="">Onderwijs voor volwassenen</a>
                        </nav>
                    </div>
                    <div class="headliner-column">
                        <nav>
                            <img src="img/arrow.png"/><a href="">Basiseducatie/Nt2</a>
                            <img src="img/arrow.png"/><a href="">Vavo</a>
                            <img src="img/arrow.png"/><a href="">Alle opleidingen</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner + nav  -->
    <div class="body-options">
        <div class="option-one option">
            <h1>Aanmelden MBO</h1>
            <p style=color:white;>Studiekeuze gemaakt? Meld je nu aan</p>
        </div>
        <div class="option-two option">
            <h1>Gezakt? Curio Vavo is er voor jouw</h1>
            <p>Kom naar de vavo informatiebijeenkomst</p>
        </div>
    </div>
 <!-- vakken -->
    <div class="alle-vakken">
      <div class="vakken-body">
        <h1>Vakken</h1>
        <?php require_once "vakken.php" ?>
      </div>
    </div>
    
    <!-- vakken -->
    <!-- blokken -->
    <div class="alle-blokken">
      <div class="rooster-body">
          <h1>Rooster</h1>
          <p>Een voorbeeld hoe een roosterweek eruit ziet</p>
              <img src="img/Rooster.png" alt="Rooster">
      </div>
      <?php require_once "blokkenCards.php"?>
    </div>
</div>
<!-- blokken -->
<div class="leraren-header">
  <h1>Leraren SoftwareDeveloper</h1>
</div>
<div class="alle-leraren">
  <div class="leraren-details">
    <h3>Leraren</h3>
  <?php require_once "table.php" ?>
  </div>
 <!-- carousel  -->
  <?php require_once "lerarenCarrousel.php" ?>
  <!-- carousel -->
  <div class="versnellings-overzicht">
    <div class="versnelling-img">
      <h2>Opleidingsoverzicht</h2>
        <img src="img/Opleidingsoverzicht.png" alt="afbeelding-overzicht-versnelling">
     </div>
     <div class="versnelling-text">
      <h2>Hoe kom je in aanmerking voor versnelling?</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, officia quam sint harum unde tempore labore, tempora veritatis consectetur illum, aspernatur corporis iusto doloremque delectus? Voluptas eveniet fuga consequuntur minima.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium repellat non, commodi veniam, deleniti illo sit tempora vel molestiae ipsam pariatur in perspiciatis animi quod iste maxime exercitationem facere doloremque.</p>
     </div>
  </div>ffd
</body>
</html>