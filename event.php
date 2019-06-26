<?php
$title = 'Évènement';
session_start();
require_once 'includes/header.php';

if (!isset($_SESSION['id'])) {
  ?>
  <p>Veuillez vous connecter</p>
<?php } else { ?>
  <div></div>
  <div></div>
  <div></div>
  <section class="section section-light">
    <h2>Kizz Finder</h2>
    <p>tu es à Paris pour la première fois, ou tu cherche simplement à avoir le choix pour sortir ce soir?!</p>
    <p> Alors clique sur l'image ci dessous, tu n'aura plus que l'embarras du choix.     </p>
  </section>
  <a href= 'http://kizzfinder.com/'> 
    <div class="kizzfinderparis">
      <div class="ptext">
      </div>
    </div>
  </a>  
  <section class="section section-dark">
    <h2>Kizz Finder Benelux</h2>
    <p>Gens du Nord, et gens d'ailleurs, Kizz Finder n'est pas qu'a Paris </p> 
    <p>Que tu sois en Belgique, au Luxembourg, dans le nord de la France ou même au Pays Bas on t'aidera à trouver ta soirée</p>
  </section>
  <a href= 'http://kizzfinder.com/benelux/en/'> 
    <div class="kizzfinderbenelux">
      <div class="ptext">
      </div>
    </div>
  </a>
  <section class="section section-dark">
    <h2>Kizomba-World</h2>
    <p> Comme ça tu n'habite ni dans le nord de la France ni au Benelux et tu ne sais pas ou trouver de soirée kizomba à l'étranger? </p>
    <p> Encore une fois tu te doute bien qu'on à trouver une solution pour toi </p>
    <p> If you looking for to go dance kizomba worldwide, you schoul check this out! </p>
  </section>
  <a href= 'http://www.kizomba-world.com/'> 
    <div class="kizombaworlds">
      <div class="ptext">
      </div>
    </div> </a> 
  <section class="section section-light">
    <h2>VVK</h2>
    <p> Si tu danse la Kizomba à Paris ou à Lyon tu dois connaitre la team à l'origine du projet We The Tribe  </p>
    <p> tu veux savoir à quel évènement on sera...rien de plus simple suivez nous et Vivez Votre Kizomba</p>
  </section>
  <a href= 'https://vvk.paris/?fbclid=IwAR26Cvum4q-F1RsYQwX7iOn1OOBfuHBzlHcq4yY0GhnRYiADkSz3FH1822U'> 
    <div class="vvkparis">
      <div class="ptext">
      </div>
    </div>
  </a> 

  <?php
}
require_once 'includes/footer.php';
?>
  