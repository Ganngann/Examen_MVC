<?php

  /*
    ./app/vues/categories/index.php
    Variables disponibles:
      - $categories ARRAY(ARRAY(id, name, created_at))
  */

?>

<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">
      <?php foreach ($categories as $category): ?>
        <li>
            <a href="categories/<?php echo $category['id']; ?>/<?php echo \Noyau\Fonctions\slugify($category['name']); ?>" class="d-flex">
                <p><?php echo $category['name']; ?></p>
                  <?php foreach ($nbrPosts as $nbrPost): ?>
                    <?php if($nbrPost['categorie_id'] === $category['id']): ?>
                      <p>(<?php echo $nbrPost['nbrPostsByCategory']; ?>)</p>
                    <?php endif; ?>
                  <?php endforeach; ?>
            </a>
        </li>
      <?php endforeach; ?>
</aside>
