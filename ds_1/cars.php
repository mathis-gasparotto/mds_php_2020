<?php 
require_once "layout/header.php";
require_once "data/cars.php";
?>

<h1>Toutes nos voitures</h1>

<div id="search_bar">
  <form action="car_searched.php">
    <label for="car_name">Nom de la voiture : </label>
    <input type="text" name="car_name" value="" />

    <label for="car_nb_seats">Nombre de places : </label>
    <input type="number" name="car_nb_seats" value="" />

    <label for="car_price_min">Prix minimum : </label>
    <input type="number" name="car_price_min" value="" />

    <label for="car_transmission">L'objet de votre demande : </label>
    <select name="car_transmission">
      <option value="">--Choisir une transmission--</option>
      <option value="manual">Manuelle</option>
      <option value="automatic">Automatique</option>
    </select>

    <button type="submit">Rechercher</button>

  </form>
</div>

<div id="content">
  <div id="cars">
    <?php foreach($cars as $car) { 
      require "layout/car.php";
    } ?>
  </div>
</div>

<?php require_once "layout/footer.php";?>