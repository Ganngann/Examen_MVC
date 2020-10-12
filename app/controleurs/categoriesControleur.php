<?php

/*
./app/controleurs/categoriesControleur.php
*/

namespace App\Controleurs\CategoriesControleur;
use App\Modeles\CategoriesModele;


/**
 * [indexAction liste des catégories]
 * @param  PDO    $connexion [connexion à la db]
 * @return [type]            [description]
 */
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
