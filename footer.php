</div><!-- /.pt-[72px] -->

<footer class="bg-secondary text-white">
  <div class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div>
      <h3 class="text-lg font-bold mb-4"><?php bloginfo('name'); ?></h3>
      <p class="text-slate-400 text-sm"><?php bloginfo('description'); ?></p>
    </div>
    <div>
      <h3 class="text-lg font-bold mb-4">Links</h3>
      <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false, 'menu_class' => 'flex flex-col gap-2 text-slate-400 text-sm', 'fallback_cb' => false]); ?>
    </div>
    <div>
      <h3 class="text-lg font-bold mb-4">Contato</h3>
      <ul class="flex flex-col gap-2 text-slate-400 text-sm">
        <?php foreach (['contact_phone', 'contact_email', 'contact_address'] as $f): $v = theme_get_field($f, 'option'); if ($v): ?>
          <li><?php echo esc_html($v); ?></li>
        <?php endif; endforeach; ?>
        <?php $hours = theme_get_field('contact_hours', 'option'); if ($hours): ?>
          <li class="whitespace-pre-line"><?php echo esc_html($hours); ?></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <div class="border-t border-white/10 py-4 text-center text-slate-500 text-xs">
    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
