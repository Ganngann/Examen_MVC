<?php

/*
./app/vues/template/index.php
*/

?>

<!DOCTYPE html>
<html lang="en">
<?php include '../app/vues/template/partials/_head.php'; ?>

<body>

   <?php include '../app/vues/template/partials/_preloader.php'; ?>

   <div id="main">
      <div class="container">
         <div class="row">

            <!-- #### je ne suis pas en accord avec le découpage du template d'origine, qui concidere la sidebar comme fesant partie du main. ors, en l'occurence, elle a plutot le role du header -->
            <?php include '../app/vues/template/partials/_sideBar.php'; ?>


            <!-- #### Pour moi, le main, c'est ceci, n'en déplaise au créateur du template. -->
            <?php include '../app/vues/template/partials/_main.php'; ?>

         </div>
      </div>
   </div>


   <!-- #### faire un partial juste pour ce bouton, me parait abusé, mais sa place n'est pas non plus dans le footer... -->
   <!-- #### si il y en avais plusieures, pourquoi ne pas faire un partial _fixed.php -->
   <!-- Back to Top Start -->
   <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
   <!-- Back to Top End -->

   <?php include '../app/vues/template/partials/_scripts.php'; ?>

</body>
</html>
