<?php get_header(); ?>
<main class="section">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <h1 class="text-4xl font-bold mb-8"><?php the_title(); ?></h1>
    <div class="prose max-w-none"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
