<?php

/*
./noyau/fonctions.php
Fonctions de l'application
*/

namespace Noyau\Fonctions;


/**
 * [slugify transforme une chaine en slug]
 * @param  string $str [chaine à transformer]
 * @return [type]      [slug]
 */
function slugify(string $str) {
   return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
}

/**
 * [tronquer racourcis un texte à l'espace qui suit le nombre de caracteres indiqué]
 * @param  string  $chaine         [chaine à réduire]
 * @param  integer $nbreCaracteres [nombre de caracteres]
 * @return string                  [chaine réduite]
 */
function tronquer(string $chaine, int $nbreCaracteres = 200) :string {
   if (strlen($chaine) > $nbreCaracteres):
      $positionEspace = strpos($chaine, ' ', $nbreCaracteres);
      return substr($chaine, 0, $positionEspace);
   else:
      return $chaine;
   endif;
}

/**
 * [datify formateur de date]
 * @param  string $date   [string contenant la date]
 * @param  string $format [format de date php]
 * @return [type]         [date formatée]
 */

function datify(string $date, string $format) {
   return date_format(date_create($date), $format);
}
