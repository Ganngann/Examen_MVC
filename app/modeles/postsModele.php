<?php

  /*
    ./app/modeles/postsModele.php
  */

    namespace App\Modeles\PostsModele;

    function findAll(\PDO $connexion) {
      $sql = "SELECT *
              FROM posts p
              JOIN categories c on p.category_id = c.id
              ORDER BY p.created_at DESC
              LIMIT 10;";
      $rs = $connexion->query($sql);
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    function findOneById(\PDO $connexion, int $id) :array {
      $sql = "SELECT *
              FROM posts
              WHERE id = :id;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      $rs->execute();
      return $rs->fetch(\PDO::FETCH_ASSOC);
    }

    function findNumberOfPostsByCategorie(\PDO $connexion) {
      $sql = "SELECT COUNT(id) AS nbrPostsByCategory, categorie_id
              FROM posts
              GROUP BY categorie_id;";
      $rs = $connexion -> query($sql);
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    function findAllByCategorieId(\PDO $connexion, int $id) {
      $sql = "SELECT *
              FROM posts
              WHERE categorie_id = :id
              ORDER BY created_at DESC;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      $rs->execute();
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }
