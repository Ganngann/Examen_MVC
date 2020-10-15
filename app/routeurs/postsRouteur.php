<?php

  /*
    ./app/routeurs/postsRouteur.php
  */

  use \App\Controleurs\PostsControleur;
  include_once '../app/controleurs/postsControleur.php';

  switch ($_GET['posts']):
    case 'show':
    // DETAIL D'UN POST
    // PATTERN: index?posts=show&id=x
    // CTRL: postsControleur
    // ACTION: show
        PostsControleur\showAction($connexion, $_GET['id']);
      break;
    case 'addForm':
    // AJOUT D'UN POST: FORMULAIRE
    // PATTERN: index?posts=addForm
    // CTRL: postsControleur
    // ACTION: addForm
        PostsControleur\addFormAction($connexion);
   break;
   case 'add':
   // AJOUT D'UN POSTS: INSERT
   // PATTERN: index.php?posts=add
   // CTRL: postsControleur
   // ACTION: add
      PostsControleur\addAction($connexion);
   break;
   case 'editForm':
   // EDITION D'UN POSTS: FORMULAIRE
   // PATTERN: index.php?posts=editForm
   // CTRL: postsControleur
   // ACTION: editForm
      PostsControleur\editFormAction($connexion, $_GET['id']);
   break;
   case 'edit':
   // EDITION D'UN POSTS: UPDATE
   // PATTERN: index.php?posts=edit&id=x
   // CTRL: postsControleur
   // ACTION: edit
      PostsControleur\editAction($connexion, $_GET['id']);
   break;
   case 'delete':
   // SUPPRESSION D'UN POSTS
   // PATTERN: index.php?posts=delete&id=x
   // CTRL: postsControleur
   // ACTION: delete
      PostsControleur\deleteAction($connexion, $_GET['id']);
   break;
  endswitch;
