<?php

  /*
    ./app/modeles/postsModele.php
  */

    namespace App\Modeles\PostsModele;

    function findAll(\PDO $connexion) {
      $sql = "SELECT *, p.id as postId,
                        c.id as categorieId,
                        c.name as categorieName

              FROM posts p
              JOIN categories c on p.category_id = c.id
              ORDER BY p.created_at DESC
              LIMIT 10;";
      $rs = $connexion->query($sql);
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }



    function findOneById(\PDO $connexion, int $id) :array {
      $sql = "SELECT *, p.id as postId,
                        c.id as categorieId,
                        c.name as categorieName
              FROM posts p
              JOIN categories c on p.category_id = c.id
              WHERE p.id = :id;";
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

    function insert(\PDO $connexion, array $data) :int {
      $sql = "INSERT INTO posts
              SET title        = :title,
                  text         = :text,
                  quote        = :quote,
                  category_id = :category,
                  created_at   = CURRENT_TIMESTAMP();";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
      $rs->bindValue(':text', $data['text'], \PDO::PARAM_STR);
      $rs->bindValue(':quote', $data['quote'], \PDO::PARAM_INT);
      $rs->bindValue(':category', $data['category_id'], \PDO::PARAM_INT);
      $rs->execute();
      return $connexion->lastInsertId();
   }

   function updateOneById(\PDO $connexion, int $id, array $data) :bool {
     $sql = "UPDATE posts
              SET title        = :title,
                  text         = :text,
                  quote        = :quote,
                  category_id = :category
             WHERE id         = :id;";
     $rs = $connexion->prepare($sql);
     $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
     $rs->bindValue(':text', $data['text'], \PDO::PARAM_STR);
     $rs->bindValue(':quote', $data['quote'], \PDO::PARAM_INT);
     $rs->bindValue(':category', $data['category_id'], \PDO::PARAM_INT);
     $rs->bindValue(':id', $id, \PDO::PARAM_INT);
     return intval($rs->execute());
   }

   function deleteOneById(\PDO $connexion, int $id) :bool {
     $sql = "DELETE FROM posts
             WHERE id = :id;";
     $rs = $connexion->prepare($sql);
     $rs->bindValue(':id', $id, \PDO::PARAM_INT);
     return intval($rs->execute());
   }
