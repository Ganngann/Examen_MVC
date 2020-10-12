<?php

/*
./app/vues/posts/show.php
Variables disponibles:
- $post ARRAY(id, title, content, created_at, image, author_id, categorie_id))
*/

?>


<div class="sub-title">
   <a href="index.html" title="Go to Home Page"><h2>Back Home</h2></a>
   <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
</div>


<div class="col-md-12 content-page">
   <div class="col-md-12 blog-post">


      <!-- Post Headline Start -->
      <div class="post-title">
         <h1><?php echo $post['title']; ?></h1>
      </div>
      <!-- Post Headline End -->


      <!-- Post Detail Start -->
      <div class="post-info">
         <span><?php echo date('F d, Y', strtotime($post['created_at'])); ?></span> | <span><?php echo $post['categorieName']?></span>
      </div>
      <!-- Post Detail End -->


      <p><?php echo $post['text']?></p>



      <!-- Post Blockquote (Italic Style) Start -->
      <blockquote class="margin-top-40 margin-bottom-40">
         <p><?php echo $post['quote']?></p>
      </blockquote>
      <!-- Post Blockquote (Italic Style) End -->

      <!-- Post Buttons -->
      <div>
         <a href="form.html" type="button" class="btn btn-primary">Edit Post</a>
         <a href="#" type="button" class="btn btn-secondary" role="button">Delete Post</a>
      </div>
      <!-- Post Buttons End -->




   </div>
</div>