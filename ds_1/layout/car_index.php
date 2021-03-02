<div class="car">
  <img class="car_img" src="img/<?php echo $cars[$i]['image']; ?>" alt="car_img">
  <p class="car_name"><?php echo $cars[$i]['name']; ?></p>
  <p class="car_price"><?php echo $cars[$i]['price']; ?>€</p>
  <a href="car.php?id=<?php echo $cars[$i]['id']?>">Voir le produit</a>
</div>