<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="fv">
      <div class="page-name"><?php the_title(); ?></div>
    </section>

    <section class="contact-form">
      <div class="contact-form-inner">
        <p class="form-ttl">お気軽にお申込みください。</p>
        <?php the_content(); ?>
      </div>
    </section>
<?php endwhile;
endif; ?>
<?php get_footer('contact'); ?>