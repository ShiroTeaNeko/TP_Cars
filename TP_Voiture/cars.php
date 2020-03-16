<?php
$title = "Les produits";
require_once 'public/layout/header.php';
require_once 'functions/cars.php';

$cars = getCars();
?>

<div class="container mt-4">
  <div class="row">
    <?php
    foreach ($cars as $cars) {
      require 'public/product/allCars.php';
    }
    ?>
  </div>
</div>

<?php require_once 'public/layout/footer.php'; ?>