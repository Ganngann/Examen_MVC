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




            <?php include '../app/vues/template/partials/_sideBar.php'; ?>



            <?php include '../app/vues/template/partials/_main.php'; ?>


         </div>
      </div>
   </div>



   <!-- Back to Top Start -->
   <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
   <!-- Back to Top End -->


  <?php include '../app/vues/template/partials/_scripts.php'; ?>

</body>
</html>
