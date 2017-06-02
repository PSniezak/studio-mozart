<?php

require_once 'vendor/autoload.php';
$directus_url = "https://admin.studio-mozart.pezak.ovh";

$client = \Directus\SDK\ClientFactory::create('ShUhl3apZ0vZlYQqWHJlg5NNuxb0NeYK', [
    'base_url' => $directus_url
]);

$prices = $client->getItems('prices');
$photographers = $client->getItems('photographers');
$home = $client->getItem('others', 1);
$location = $client->getItem('others', 2);

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
    <link rel="stylesheet" type="text/css" href="/css/remodal.css"/>
    <link rel="stylesheet" type="text/css" href="/css/remodal-default-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  </head>
  <body>
    <div class="remodal-bg">
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
          <a href="https://www.facebook.com/studiomozartparis/" target="_blank">facebook</a>
          <a href="https://www.instagram.com/studiomozartparis/" target="_blank">instagram</a>
        </div>
      </div>

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
            <a href="#tarif0">Tarifs</a>
            <a href="#faq">FAQ</a>
            <a href="#photographes">Photographes</a>

            <div class="contact">
              <a href="#contact">Contact</a>
            </div>
          </div>

          <div class="socials">
            <div class="left">
              <a href="https://www.facebook.com/studiomozartparis/" target=_blank>Facebook</a>
            </div><!--
            --><div class="right">
              <a href="https://www.instagram.com/studiomozartparis/" target="_blank">Instagram</a>
            </div>
          </div>
        </div>
      </div>

      <div id="fullpage">
        <!-- Home -->
        <div data-anchor="accueil" id="home" class="section">
          <div class="main-background" style="background-image: url('<?php echo $directus_url . $home->image->url ?>')"></div>
          <div class="arrow" onclick="$.fn.fullpage.moveSectionDown();">
            <img src="/img/arrow-down.png" alt="v">
          </div>
        </div>

        <!-- Location -->
        <div data-anchor="lieu" id="location" class="section">
          <div class="container">
            <div class="left">
              <div class="presentation">
                <p>
                  Le Studio Mozart se situe dans le quartier d’Auteuil, dans un environnement calme, dans le XVIème arrondissement de Paris. Situé au 6ème étage, avec ascenceur et sans vis-à-vis d’un immeuble classé datant des années 30, le studio Mozart jouit d’un balcon orienté plein sud.<br/><br/>
                  Le Studio Mozart a conservé les éléments de l’ancien : parquet, moulures. Très ensoleillé, il dispose d’une belle hauteur sous plafond (3m30) et d’une excellente luminosité. Refait à neuf dans un esprit contemporain. Il dispose de 15 prises situées au extrémités de la pièce principale, permettant ainsi un grand nombre de branchements.<br/><br/>
                  Le Studio Mozart dispose également d’une cuisine toute équipée ainsi qu’une douche prête à l’emploi.
                </p>
                <br>
                <a href="/img/STUDIO_MOZART_PLAN.pdf" target="_blank">Télécharger le plan du Studio Mozart</a>
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
            --><div class="right" style="background-image: url('<?php echo $directus_url . $location->image->url; ?>')"></div>
          </div>
        </div>

        <!-- Pricing -->
        <div data-anchor="tarifs" id="pricing" class="section">
          <!--
          <?php foreach($prices as $price): ?>
            --><div class="grid-4">
              <span class="price"><?php echo $price->price ?> € <sup>ttc</sup></span><br>
              <span class="delay"><?php echo $price->timing ?></span>
              <div class="informations">
                <span>Durée de la location</span><br>
                <?php echo $price->schedule ?><br>
                Heure supplémentaire <span class="supp">+50,00 € <sup>TTC</sup></span><br>
                <br>
                <?php echo $price->description ?>
              </div>

              <!-- TODO Reservation -->
              <a data-remodal-target="booking" class="booking-trigger">Réserver le studio</a>

              <div class="next-slide" onclick="$.fn.fullpage.moveSectionDown();">
                <p>offre suivante</p>
                <img src="/img/arrow-down.png" alt="v">
              </div>
            </div><!--
          <?php endforeach; ?>
          -->
        </div>

        <!-- FAQ -->
        <div data-anchor="faq" id="questions" class="section">
          <div class="helper">
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
        </div>

        <!-- Photographers -->
        <div data-anchor="photographes" id="displays" class="section">
          <div class="container">
            <!--
            <?php foreach($photographers as $photographer): ?>
            <?php for ($i=0; $i < 12; $i++): ?>
            --><div class="grid-4 item" data-id="<?php echo $photographer->id ?>">
                <div class="main-picture" style="background-image: url('<?php echo $directus_url . $photographer->cover->url; ?>')"></div>
                <div class="name"><p>Calypso Mahieu</p></div>
              </div><!--
            <?php endfor; ?>
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
                <span class="title">Se rendre au Studio Mozart</span>
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
    </div>

    <div class="remodal remodal-form" data-remodal-id="booking">
      <button data-remodal-action="close" class="remodal-close"></button>
      <p class="title">Demande de réservation</p>

      <form id="booker" method="post">
        <input required type="text" name="name" placeholder="Nom *">
        <input required type="email" name="email" placeholder="Email *">
        <input required type="tel" name="tel" placeholder="Numéro de téléphone *">
        <input type="hidden" name="price" value="" class="price-container">
        <input required type="submit" name="submit" value="Envoyer" class="submit">
      </form>
    </div>

    <div class="remodal remodal-confirmation" data-remodal-id="confirmation">
      <button data-remodal-action="close" class="remodal-close"></button>
      <p class="title">Votre demande a bien été envoyée.</p>
    </div>

    <div class="remodal remodal-confirmation" data-remodal-id="erreur">
      <button data-remodal-action="close" class="remodal-close"></button>
      <p class="title">Une erreur est survenue lors de l'envoie.</p>
      <p class="error">Contacter nous directement <a href="mailto:booking@studiomozartparis.com">booking@studiomozartparis.com</a></p>
    </div>

    <script src="/scripts/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/scrolloverflow.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/jquery.fullpage.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/remodal.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/scripts/jquery.mousewheel.min.js" type="text/javascript" charset="utf-8"></script>

    <script src="/scripts/main.js" type="text/javascript" charset="utf-8"></script>

  </body>
</html>
