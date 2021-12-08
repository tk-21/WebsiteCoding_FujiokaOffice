<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="fv">
      <div class="page-name"><?php the_title(); ?></div>
    </section>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>