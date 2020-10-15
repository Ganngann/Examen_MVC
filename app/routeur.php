<?php

/*
./app/routeur.php
Routeur principal
Charge le routeur dédié ou charge le contrôleur et lance l'action correspondant à ce qui se passe dans l'URL
*/





// ROUTE DES POSTS
// PATTERN: index?posts=x
// ROUTEUR: postsRouteur
if (isset($_GET['posts'])):
   include_once '../app/routeurs/postsRouteur.php';




// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
else:
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\indexAction($connexion);
endif;
