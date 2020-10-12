<?php

  /*
    ./noyau/fonctions.php
    Fonctions de l'application
  */

  namespace Noyau\Fonctions;

    function slugify(string $str) {
      return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
    }

    function tronquer(string $chaine, int $nbreCaracteres = 200) :string {
      if (strlen($chaine) > $nbreCaracteres):
        $positionEspace = strpos($chaine, ' ', $nbreCaracteres);
        return substr($chaine, 0, $positionEspace);
      else:
        return $chaine;
      endif;
    }
