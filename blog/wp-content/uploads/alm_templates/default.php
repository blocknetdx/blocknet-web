<div class="news-item-wrap post type-post status-publish format-standard has-post-thumbnail hentry">
<div class="news-item-img-wrap">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(''); }?>
</div>
<div class="news-item-content">
  <h3 class="news-item-header"><?php the_title(); ?></h3>
   <p><?php the_excerpt(); ?></p>
<a class="link text-link-with-icon" href="<?php the_permalink(); ?>">Read more...</a>
</div>
</div>