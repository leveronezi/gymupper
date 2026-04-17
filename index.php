<?php get_header(); ?>
<main class="section">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8'); ?>>
      <h2 class="text-2xl font-bold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="text-slate-500 text-sm mb-4"><?php the_date(); ?></div>
      <div><?php the_excerpt(); ?></div>
    </article>
  <?php endwhile; else: ?>
    <p><?php esc_html_e('Nenhum conteúdo encontrado.', 'wp-theme-base'); ?></p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
