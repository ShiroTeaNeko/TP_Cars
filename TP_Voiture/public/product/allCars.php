<div class="card col-4">
  <div class="card-body">
    <h5 class="card-title">
      <?php echo $cars['nom'];
            echo '<br>';
            echo 'annee de sortie du vehicule : ', $cars['annee_sortie'];
            echo '<br>';
            echo 'nombre de kilometre : ', $cars['nb_km'];
            echo '<br>';
            echo 'prix du vehicule : ', $cars['prix'];
      ?>

    </h5>
  </div>
</div>