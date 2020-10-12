<?php

  /*
    ./app/controleurs/categoriesControleur.php
  */

    namespace App\Controleurs\CategoriesControleur;
    use App\Modeles\CategoriesModele;

    function indexAction(\PDO $connexion) {
      // Je mets dans $categories la liste des 10 dernières catégories que je demande au modèle
      include_once '../app/modeles/categoriesModele.php';
      $categories = CategoriesModele\findAll($connexion);
      // Je mets dans $nbrPosts le nombre de posts que contient chaque catégorie
      include_once '../app/modeles/postsModele.php';
      $nbrPosts = \App\Modeles\PostsModele\findNumberOfPostsByCategorie($connexion);

      // Je charge directement la vue index
        include '../app/vues/categories/index.php';
    }

    function showAction(\PDO $connexion, int $id) {
      // Je mets dans $categorie les infos de la catégorie que je demande au modèle
      include_once '../app/modeles/categoriesModele.php';
      $categorie = CategoriesModele\findOneById($connexion, $id);
      // Je mets dans $posts le nombre total de posts qu'une catégorie possède
      include_once '../app/modeles/postsModele.php';
      $posts = \App\Modeles\PostsModele\findAllByCategorieId($connexion, $id);
      // Je mets dans $tags le nombre total de tags qu'un post possède
      include_once '../app/modeles/tagsModele.php';
      $tags = \App\Modeles\TagsModele\findTagsOfPost($connexion);
      // Je charge la vue show dans $content
      GLOBAL $content, $title;
      $title = $categorie['name'];
      ob_start();
        include '../app/vues/categories/show.php';
      $content = ob_get_clean();
    }
