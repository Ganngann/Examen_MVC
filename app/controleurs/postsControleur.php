<?php

  /*
    ./app/controleurs/postsControleur.php
  */

    namespace App\Controleurs\PostsControleur;
    use App\Modeles\PostsModele;

    function indexAction(\PDO $connexion) {
      // Je mets dans $posts la liste des 10 derniers posts que je demande au modèle
      include_once '../app/modeles/postsModele.php';
      $posts = PostsModele\findAll($connexion);

      // Je charge la vue posts/index dans $content
      GLOBAL $content, $title;
      $title = "Blog";
      ob_start();
        include '../app/vues/posts/index.php';
      $content = ob_get_clean();
    }

    function showAction(\PDO $connexion, int $id) {
      // Je mets dans $post les infos du post que je demande au modèle
      include_once '../app/modeles/postsModele.php';
      $post = PostsModele\findOneById($connexion, $id);
      // Je charge la vue show dans $content
      GLOBAL $content, $title;
      $title = $post['title'];
      ob_start();
        include '../app/vues/posts/show.php';
      $content = ob_get_clean();
    }

    function addFormAction(\PDO $connexion) {
      // Je vais chercher les catégories
      include_once '../app/modeles/categoriesModele.php';
      $categories = \App\Modeles\CategoriesModele\findAll($connexion);
      // Je charge la vue addForm dans $content
      GLOBAL $content, $title;
      $title = TITRE_POSTS_ADDFORM;
      ob_start();
        include '../app/vues/posts/addForm.php';
      $content = ob_get_clean();
    }

    function addAction(\PDO $connexion) {
     // Je demande au modèle d'ajouter le post
     include_once '../app/modeles/postsModele.php';
     $id = \App\Modeles\PostsModele\insert($connexion, $_POST);
     // Je redirige vers la liste des posts
     header('location: ' . BASE_URL_PUBLIC . 'posts');
  }

  function editFormAction(\PDO $connexion, int $id) {
    // Je demande au modèle de trouver le post correspondant
    include_once '../app/modeles/postsModele.php';
    $post = PostsModele\findOneById($connexion, $id);
    // Je vais chercher les catégories
    include_once '../app/modeles/categoriesModele.php';
    $categories = \App\Modeles\CategoriesModele\findAll($connexion);
    // Je charge la vue editForm dans content
    GLOBAL $content, $title;
    $title = TITRE_POSTS_EDITFORM;
    ob_start();
     include '../app/vues/posts/editForm.php';
    $content = ob_get_clean();
}

function editAction(\PDO $connexion, int $id) {
  // Je demande au modèle d'updater le post
  include_once '../app/modeles/postsModele.php';
  $return1 = PostsModele\updateOneById($connexion, $id, $_POST);
  // Je redirige vers la liste des posts
  header('location: ' . BASE_URL_PUBLIC . 'posts');
}

function deleteAction(\PDO $connexion, int $id) {
  // Je demande au modèle de supprimer le post
  include_once '../app/modeles/postsModele.php';
  $return1 = PostsModele\deleteOneById($connexion, $id);
  // Je redirige vers la liste des posts
  header('location: ' . BASE_URL_PUBLIC . 'posts');
}
