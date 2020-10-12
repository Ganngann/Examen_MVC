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



// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
else:
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\indexAction($connexion);
endif;
