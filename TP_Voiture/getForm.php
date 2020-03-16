<?php

(empty($_POST) ||
  empty($_POST['nom']) ||
  empty($_POST['annee_sortie']) ||
  empty($_POST['nb_km']) ||
  empty($_POST['prix'])) && exit("veuillez verifier vos entrées");

require_once 'functions/form.php';
$title = "Formulaire";
require_once 'public/layout/header.php';

?>
<div class="container mt-4">
  <?php if (form($_POST['nom'], $_POST['annee_sortie'], $_POST['nb_km'], $_POST['prix'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Votre demande a bien été prise en compte, la voiture est desormais enregistré !
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de l'enregistrement de votre demande
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'public/layout/footer.php'; ?>