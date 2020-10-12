<?php

  /*
    ./app/modeles/categoriesModele.php
  */

    namespace App\Modeles\CategoriesModele;

    function findAll(\PDO $connexion) {
      $sql = "SELECT *
              FROM categories
              ORDER BY name ASC;";
      $rs = $connexion->query($sql);
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }
