<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Studio Mozart</title>
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width"/>

    <!-- TODO Favicons -->

    <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  </head>
  <body>
    <!-- Header desktop -->
    <div id="header-desktop">
      <div class="grid-4 logo">
        <a href="#accueil">Studio Mozart</a>
      </div><!--

      --><div class="grid-4 menu">
        <a href="#lieu">Le Lieu</a>
        <a href="#tarifs">Tarifs</a>
        <a href="#faq">FAQ</a>
        <a href="#photographes">Photographes</a>
      </div><!--

      --><div class="grid-4 contact">
        <a href="#contact">Contact</a>
      </div><!--

      --><div class="grid-4 social">
        <!-- TODO Social links -->
        <a href="facebook">facebook</a>
        <a href="instagram">instagram</a>
      </div>
    </div>

    <!-- Header mobile -->
    <div id="header-mobile">
      <!-- TODO Header mobile -->
      <p>Header mobile</p>
    </div>

    <div id="fullpage">
      <!-- Home -->
      <div data-anchor="accueil" id="home" class="section">
        <div class="main-background" style="background-image: url('/img/temp/HOME.jpg')"></div>
        <div class="arrow" onclick="$.fn.fullpage.moveSectionDown();">
          <img src="/img/arrow-down.png" alt="v">
        </div>
      </div>

      <!-- Location -->
      <div data-anchor="lieu" id="location" class="section">
        <div class="left">
          <div class="presentation">
            <p>
              Le Studio Mozart se situe dans le quartier d’Auteuil, dans un environnement calme, dans le XVIème arrondissement de Paris. Situé au 6ème étage, avec ascenceur et sans vis-à-vis d’un immeuble classé datant des années 30, le studio Mozart jouit d’un balcon orienté plein sud.<br/><br/>
              Le Studio Mozart a conservé les éléments de l’ancien : parquet, moulures. Très ensoleillé, il dispose d’une belle hauteur sous plafond (3m30) et d’une excellente luminosité. Refait à neuf dans un esprit contemporain. Il dispose de 15 prises situées au extrémités de la pièce principale, permettant ainsi un grand nombre de branchements.<br/><br/>
              Le Studio Mozart dispose également d’une cuisine toute équipée ainsi qu’une douche prête à l’emploi.
            </p>
            <br>
            <!-- TODO PDF link -->
            <a href="#">Télécharger le plan du Studio Mozart</a>
          </div>

          <div class="proximity">
            <p>Dans un rayon de 100m</p>

            <ul>
              <li>
                <div class="name">
                  <span>Monoprix</span>
                </div>
                <div class="opening">
                  <span>09:00 à 22:00</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Le Polo Burger</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Domino’s Pizza</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Magasin photo</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Pressing</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Pharmacie</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Poste</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Quinquallerie</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
              <li>
                <div class="name">
                  <span>Bnp</span>
                </div>
                <div class="opening">
                  <span>10:00 à 20:30</span>
                </div>
              </li>
            </ul>
          </div>
        </div><!--
        --><div class="right" style="background-image: url('/img/location.jpg')"></div>
      </div>

      <!-- Pricing -->
      <div data-anchor="tarifs" id="pricing" class="section">
        <p>Tarifs</p>
      </div>

      <!-- FAQ -->
      <div data-anchor="faq" id="faq" class="section">
        <p>FAQ</p>
      </div>

      <!-- Photographers -->
      <div data-anchor="photographes" id="photographes" class="section">
        <p>Photographers</p>
      </div>

      <!-- Contact -->
      <div data-anchor="contact" id="contact" class="section">
        <p>Contact</p>
      </div>
    </div>

    <script src="/scripts/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/scrolloverflow.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/jquery.fullPage.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/main.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>
