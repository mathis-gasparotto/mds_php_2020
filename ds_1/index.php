<?php 
require_once "layout/header.php";
require_once "data/cars.php";
?>

<h1>MatiMajioAuto</h1>
<div id="content">
  <h2>Les plus populaires</h2>
  <div id="cars">
    <?php for ($i = 0; $i < 10; $i++) { 
      require "layout/car_index.php";
    } ?>
  </div>
</div>

<?php require_once "layout/footer.php";?>