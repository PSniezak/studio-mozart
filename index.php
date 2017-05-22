<?php

require_once 'vendor/autoload.php';
$directus_url = "https://admin.studio-mozart.pezak.ovh";

$client = \Directus\SDK\ClientFactory::create('ShUhl3apZ0vZlYQqWHJlg5NNuxb0NeYK', [
    'base_url' => $directus_url
]);

$prices = $client->getItems('prices');
$photographers = $client->getItems('photographers');

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Studio Mozart</title>
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width"/>

    <!-- TODO Favicons -->

    <link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
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
      <div class="menu-icon">
        <span class="hamb-menu"></span>
      </div>

      <div class="logo">
        <a href="#accueil">Studio Mozart</a>
      </div>

      <div class="header-mobile-menu">
        <div class="container">
          <a href="#lieu">Le Lieu</a>
          <a href="#tarifs">Tarifs</a>
          <a href="#faq">FAQ</a>
          <a href="#photographes">Photographes</a>

          <div class="contact">
            <a href="#contact">Contact</a>
          </div>
        </div>

        <div class="socials">
          <!-- TODO Social links -->
          <div class="left">
            <a href="facebook">Facebook</a>
          </div><!--
          --><div class="right">
            <a href="instagram">Instagram</a>
          </div>
        </div>
      </div>
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
        <!--
        <?php foreach($prices as $price): ?>
          --><div class="grid-4">
            <span class="price"><?php echo $price->price ?> € <sup>ht</sup></span><br>
            <span class="delay"><?php echo $price->timing ?></span>
            <p class="informations">
              <span>Durée de la location</span><br>
              <?php echo $price->schedule ?><br>
              Heure supplémentaire <span class="supp">+50,00 € <sup>TTC</sup></span><br>
              <br>
              <span>Matériel compris</span><br>
              2ﬁElinchrom® BRX 500<br>
              2ﬁPortalite 66cm<br>
              Elinchrom® Tripod Set 52-190cm<br>
              Fond Colorama® L.2,72ﬁl.11m CL265 “Artic White”<br>
              Elinchrom® Tripod Set 52-190cm<br>
              Multiprises, ralonges, matériel divers, pinces, gaffer, ...<br>
              <br>
              <span>Accomodations</span><br>
              Wi-fi en fibre optique gratuit<br>
              Enceintes Bose® companion 5<br>
              Chargeurs Iphone® 4 à 7s, chargeurs universels<br>
              Disque dur Western Digital® for Mac 2To à disposition<br>
              Machine Nespresso® + capsules Nespresso® gratuites<br>
              Frigidaire 115 litres à disposition (minibar en supplément)<br>
              Plaques chauffantes, micro-ondes, matériel de cuisine
            </p>

            <!-- TODO Reservation -->
            <a href="#">Réserver le studio</a>
          </div><!--
        <?php endforeach; ?>
        -->
      </div>

      <!-- FAQ -->
      <div data-anchor="faq" id="questions" class="section">
        <div class="grid-4 infos">
          <p>
            SI VOTRE DEMANDE N’EST PAS RÉPERTORIÉE DANS CETTE FOIRE AUX QUESTIONS, VEUILLEZ NOUS CONTACTER À L’ADRESSE SUIVANTE.<br><br>
            <a href="mailto:request@studiomozartparis.com">request@studiomozartparis.com</a><br><br>
            TOUTE L’ÉQUIPE SE FERA UN PLAISIR DE VOUS AIDER.
          </p>
        </div><!--
        <?php for ($i=0; $i < 3; $i++): ?>
        --><div class="grid-4 columns">
            <h2>Le studio</h2>
            <div class="container normal-scroll">
              <?php for ($j=0; $j < 8; $j++): ?>
                <p>
                  <span>Est-ce que vous pouvez louer du matériel en supplément pour ma prise de vue ?</span><br>
                  Oui, notre large réseau de collaborateurs nous permet d’avoir accès à tout le matériel possible. Veuillez nous envoyer la liste exacte du matériel que vous souhaitez pour votre prise de vue au minimum 72h à l’avance à l’adresse material@studiomozartparis.com. Des frais de gestion d’un montant de 30$ vous seront facturés en supplément de la location du matériel.
                </p>
              <?php endfor ?>
            </div>
          </div><!--
        <?php endfor ?>
        -->
      </div>

      <!-- Photographers -->
      <div data-anchor="photographes" id="displays" class="section">
        <div class="container">
          <!--
          <?php foreach($photographers as $photographer): ?>
          --><div class="grid-4 item" data-id="<?php echo $photographer->id ?>">
              <div class="main-picture" style="background-image: url('<?php echo $directus_url . $photographer->cover->url; ?>')"></div>
              <div class="name"><p>Calypso Mahieu</p></div>
            </div><!--
          <?php endforeach; ?>
          -->
        </div>
      </div>

      <!-- Contact -->
      <div data-anchor="contact" id="infos" class="section">
        <div class="container">
          <div class="helper"></div>
          <div class="left">
            <div class="center">
              <span class="title">Réservations</span>
              <p>
                booking@studiomozartparis.com<br>
                request@studiomozartparis.com<br>
                billing@studiomozartparis.com<br>
              </p>
              <br>
              <span class="title">Adresse</span>
              <p>
                96, Avenue Mozart<br>
                75016, Paris<br>
                France<br>
              </p>
            </div>
          </div>
          <div class="right">
            <div class="center">
              <span class="title">Adresse</span>
              <p>
                métro ligne 09, arrêt Jasmin<br>
                métro ligne 09, arrêt Michel-Ange — Auteuil<br>
                métro ligne 10, arrêt Michel-Ange — Auteuil<br>
                <br>
                bus 22, arrêt Jasmin<br>
                bus 22, arrêt Georges Sand — la Fontaine<br>
                bus 52, arrêt Georges Sand — la Fontaine<br>
                bus 52, arrêt Michel-Ange — Auteuil<br>
                <br>
                station Autolib’ — 2, Avenue Mozart<br>
                station Autolib’ — 68, Avenue Mozart<br>
                station Autolib’ — 108, Avenue Mozart<br>
              </p>
            </div>
          </div>
          <div class="helper"></div>
        </div>
      </div>
    </div>

    <!-- Photographers slideshows -->
    <div id="slideshows">
      <div class="close-button">
        <img src="img/close.png" alt="X">
      </div>

      <?php foreach ($photographers as $photographer): ?>
        <div class="slideshow" data-id="<?php echo $photographer->id; ?>">
          <?php foreach ($photographer->medias as $media): ?>
            <div class="container">
              <img data-lazy="<?php echo $directus_url . $media->url ?>" alt="<?php echo $media->title . " - " . $media->tags ?>">
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <script src="/scripts/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/scrolloverflow.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/jquery.fullpage.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/slick.min.js" type="text/javascript" charset="utf-8"></script>

    <script src="/scripts/main.js" type="text/javascript" charset="utf-8"></script>

  </body>
</html>
