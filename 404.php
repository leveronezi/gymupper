<?php get_header(); ?>
<main class="section text-center py-32">
  <h1 class="text-8xl font-bold text-primary mb-4">404</h1>
  <p class="text-2xl font-semibold mb-2">Página não encontrada</p>
  <p class="text-slate-500 mb-8">O conteúdo que você procura não existe ou foi removido.</p>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">Voltar ao início</a>
</main>
<?php get_footer(); ?>
