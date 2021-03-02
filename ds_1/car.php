<?php 
require_once "layout/header.php";
require_once "data/cars.php";

if (!isset($_GET['id'])) {
  die ("ID obligatoire");
}

?>

<div id="content">
  <div id="car">
    <?php foreach ($cars as $car) {
      if ($_GET['id'] == $car['id']) { ?>
        <h3 id="name"><?php echo $car['name']; ?></h3>
        <p id="type">Type de véhicule : <?php echo $car['type']; ?></p>
        <p id="brand">Marque : <?php echo $car['brand']; ?></p>
        <img src="img/<?php echo $car['image']; ?>" alt="car_img">
        <p id="description">Description : <?php echo $car['description']; ?></p>
        <p id="seats">Nombre de place : <?php echo $car['seats']; ?></p>
        <p id="transmission">Transmission : <?php if ($car['transmission'] == "manual") {echo 'manuelle';} if ($car['transmission'] == "automatic") {echo 'automatique'; }; ?></p>
        <p id="price"><?php echo $car['price']; ?>€</p>
        <div id="tags">
          <p>Tags :</p>
          <ul>
            <?php foreach ($car['tags'] as $tag) { 
              echo '<li class="tag">' . $tag . '</li>';
            }?>
          </ul>
        </div>
        <p id="contact">Adresse email de contact du vendeur : <a href="mailto:<?php echo $car['contact']; ?>"><?php echo $car['contact']; ?></a></p>
      <?php }
    } ?>
  </div>
</div>

<?php require_once "layout/footer.php"; ?>