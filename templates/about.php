<section class="section">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <div>
      <h2 class="section-title text-left mb-4">Sobre nós</h2>
      <p class="text-slate-500 leading-relaxed mb-6">
        <?php the_field('about_text') ?: esc_html_e('Descrição da academia aqui.', 'wp-theme-base'); ?>
      </p>
      <a href="#contato" class="btn-secondary">Saiba mais</a>
    </div>
    <div class="rounded-2xl overflow-hidden">
      <?php $img = get_field('about_image'); if ($img): ?>
        <img src="<?php echo esc_url($img); ?>" alt="Sobre nós" class="w-full h-80 object-cover">
      <?php else: ?>
        <div class="w-full h-80 bg-slate-100 flex items-center justify-center text-slate-400">Imagem</div>
      <?php endif; ?>
    </div>
  </div>
</section>
