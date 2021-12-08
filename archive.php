<?php get_header(); ?>
<section class="fv">
  <div class="page-name">Blog</div>
</section>

<article class="blog-list">
  <div class="inner">
    <ul class="blog-card-wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/loop', 'blogs'); ?>
      <?php endwhile;
      endif; ?>
    </ul>
  </div>
</article>

<?php
$args = array(
  'mid-size' => 3,
  'prev_text' => '<',
  'next_text' => '>'
);
the_posts_pagination($args); ?>
<?php get_footer(); ?>