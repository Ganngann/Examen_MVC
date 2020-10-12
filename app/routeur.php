<?php

/*
./app/routeur.php
Routeur principal
Charge le contrôleur et lance l'action correspondant à ce qui se passe dans l'URL
*/


// DETAIL D'UN POST
// PATTERN: index?postID=x
// CTRL: postsControleur
// ACTION: show
if (isset($_GET['postID'])):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postID']);



// AJOUT D'UN POST: FORMULAIRE
// PATTERN: /posts/add/form.html
// CTRL: postsControleur
// ACTION: addForm
elseif (isset($_GET['posts']) and $_GET['posts'] == 'addForm'):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\addFormAction($connexion);



// AJOUT POSTS: INSERT
// PATTERN: index.php?posts=add
// CTRL: postsControleur
// ACTION: add
elseif (isset($_GET['posts']) and $_GET['posts'] == 'add'):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\addAction($connexion);



// EDITION POSTS: FORMULAIRE
// PATTERN: index.php?posts=editForm
// CTRL: postsControleur
// ACTION: editForm
elseif (isset($_GET['posts']) and $_GET['posts'] == 'editForm'):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\editFormAction($connexion, $_GET['id']);



// EDITION POSTS: UPDATE
// PATTERN: index.php?posts=edit&id=x
// CTRL: postsControleur
// ACTION: edit
elseif (isset($_GET['posts']) and $_GET['posts'] == 'edit'):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\editAction($connexion, $_GET['id']);



// SUPPRESSION POSTS
// PATTERN: index.php?posts=delete&id=x
// CTRL: postsControleur
// ACTION: delete
elseif (isset($_GET['posts']) and $_GET['posts'] == 'delete'):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\deleteAction($connexion, $_GET['id']);



// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
else:
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\indexAction($connexion);
endif;
