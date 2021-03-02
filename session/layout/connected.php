<div id="connected">
  <?php 
  foreach ($users as $user) {

  
    if($user['login'] == $_POST['login'] && $user['password'] == $_POST['password']) { ?>
      <div class="cercle_vert"></div>
    <?php } else { ?>
      <div class="cercle_vert"></div>
    <?php }
  } ?>
</div>