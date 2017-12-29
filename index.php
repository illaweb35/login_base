<?php
$titre_page='Accueil';

require_once'inc/header.php';

?>
<section class="hero">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title ">
      Bienvenue
      </h1>
      <h2 class="subtitle ">
        Site en construction
      </h2>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <nav class="level">
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Heures</p>
          <p class="title">960</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Langages</p>
          <p class="title">3</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Cours</p>
          <p class="title">18</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Echec</p>
          <p class="title">2</p>
        </div>
      </div>
    </nav>
  </div>
</section>
<section class="section">
<div class="container">
  <div class="tile is-ancestor">
    <div class="tile is-vertical is-8">
      <div class="tile">
        <div class="tile is-parent is-vertical">
          <article class="tile is-child notification is-primary">
            <p class="title">Vertical...</p>
            <p class="subtitle">Top tile</p>
          </article>
          <article class="tile is-child notification is-warning">
            <p class="title">...tiles</p>
            <p class="subtitle">Bottom tile</p>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification is-info">
            <p class="title">Middle tile</p>
            <p class="subtitle">With an image</p>
            <figure class="image is-4by3">
              <img src="http://lorempixel.com/640/480">
            </figure>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-danger">
          <p class="title">Wide tile</p>
          <p class="subtitle">Aligned with the right tile</p>
          <div class="content">
            <!-- Content -->
          </div>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-success">
        <div class="content">
          <p class="title">Tall tile</p>
          <p class="subtitle">With even more content</p>
          <figure class="image is-4by3">
            <img src="http://lorempixel.com/640/640">
          </figure>
          <div class="content">
            <!-- Content -->
          </div>
        </div>
      </article>
    </div>
  </div>


<?php require_once'inc/footer.php'; ?>
