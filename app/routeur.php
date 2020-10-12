<?php

  /*
    ./app/routeur.php
    Routeur principal
    Charge le contrôleur et lance l'action correspondant à ce qui se passe dans l'URL
  */

    if (isset($_GET['users'])):
      include_once '../app/routeurs/usersRouteur.php';

    // DETAIL D'UN POST
    // PATTERN: index?postID=x
    // CTRL: postsControleur
    // ACTION: show
    elseif (isset($_GET['postID'])):
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postID']);

    // DETAIL D'UNE CATEGORIE
    // PATTERN: index?categorieID=x
    // CTRL: categoriesControleur
    // ACTION: show
    elseif (isset($_GET['categorieID'])):
      include_once '../app/controleurs/categoriesControleur.php';
      \App\Controleurs\CategoriesControleur\showAction($connexion, $_GET['categorieID']);

    // PAGE DE CONTACT
    // PATTERN: index?contact
    // CTRL: /
    // ACTION: /
    elseif (isset($_GET['contact'])):
      $title = "Contact";
      ob_start();
        include '../app/vues/template/partials/_contact.php';
      $content = ob_get_clean();

    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: postsControleur
    // ACTION: index
    else:
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\indexAction($connexion);
    endif;
