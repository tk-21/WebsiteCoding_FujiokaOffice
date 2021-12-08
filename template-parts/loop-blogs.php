<li>
  <a href="<?php the_permalink(); ?>">
    <figure>
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg">
      <?php endif; ?>
    </figure>
    <div class="card-body">
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
      <h3><?php the_title(); ?></h3>
      <p>
        <?php the_excerpt(); ?>
      </p>
    </div>
    <p class="badge">
      <?php
      $category = get_the_category();
      echo $category[0]->name;
      ?>
    </p>
  </a>
</li>