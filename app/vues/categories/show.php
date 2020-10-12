<?php

  /*
    ./app/vues/categories/show.php
    Variables disponibles:
      - $categorie ARRAY(ARRAY(id, name, created_at))
  */

?>

<h1><?php echo $categorie['name']; ?></h1>
<?php include '../app/vues/posts/liste.php'; ?>
