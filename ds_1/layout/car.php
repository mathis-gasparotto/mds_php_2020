<div class="car">
  <img class="car_img" src="img/<?php echo $car['image']; ?>" alt="car_img">
  <p class="car_name"><?php echo $car['name']; ?></p>
  <p class="car_price"><?php echo $car['price']; ?>€</p>
  <a href="car.php?id=<?php echo $car['id']?>">Voir le produit</a>
</div>
