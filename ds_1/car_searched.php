<?php 
require_once "layout/header.php";
require_once "data/cars.php";
?>

<?php foreach ($cars as $car) {
  if ($_GET['car_name'] == $car['name'] && $_GET['car_nb_seats'] == $car['seats'] && $_GET['car_price_min'] <= $car['price'] && $_GET['car_transmission'] == $car['transmission']) { ?>
    <div class="car">
      <img class="car_img" src="img/<?php echo $car['image']; ?>" alt="car_img">
      <p class="car_name"><?php echo $car['name']; ?></p>
      <p class="car_price"><?php echo $car['price']; ?>€</p>
      <a href="car.php?id=<?php echo $car['id']?>">Voir le produit</a>
    </div>
  <?php }
} ?>

<?php require_once "layout/footer.php";?>