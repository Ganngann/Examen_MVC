<?php

  /*
    ./app/vues/posts/show.php
    Variables disponibles:
      - $post ARRAY(id, title, content, created_at, image, author_id, categorie_id))
  */

?>

<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
   </div>
   <div class="blog_details">
      <h2>
        <?php echo $post['title']; ?>
      </h2>
      <div>
        <?php echo $post['content']; ?>
      </div>
   </div>
</div>
