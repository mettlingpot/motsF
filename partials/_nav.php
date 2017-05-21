 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Mots Fleches</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?= set_active('index') ?>"><a href="index.php">Accueil</a></li>
            <li class="<?= set_active('login') ?>"><a href="login.php">Connexion</a></li>
            <li class="<?= set_active('inscription') ?>"><a href="inscription.php">Inscription</a></li>
            <li class="<?= set_active('grille') ?>"><a href="grille.php">Grille</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>