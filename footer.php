<footer class="bg-surface border-t border-white/5">

  <div class="max-w-[1200px] mx-auto px-6 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

      <!-- Brand -->
      <div class="lg:col-span-2">
        <img src="<?php echo esc_url(THEME_URI . '/assets/images/logo.svg'); ?>"
             alt="GymUpper" class="h-9 w-auto mb-5">
        <p class="text-muted text-sm leading-relaxed max-w-xs">
          Especialistas em performance para academias. Levamos seu negócio ao topo com tráfego pago local, SEO e estratégias de conversão.
        </p>
        <div class="flex gap-3 mt-6">
          <a href="<?php echo esc_url(theme_whatsapp_link('Olá, quero saber mais sobre a GymUpper!')); ?>"
             target="_blank" rel="noopener"
             class="icon-box hover:scale-110 transition-transform duration-200"
             aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
              <path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.118 1.532 5.845L.057 23.667a.5.5 0 0 0 .611.61l5.822-1.475A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.895 0-3.665-.512-5.188-1.403l-.372-.215-3.853.977.997-3.853-.23-.386A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
            </svg>
          </a>
          <?php $ig = get_option('gymupper_instagram', ''); if ($ig): ?>
          <a href="<?php echo esc_url($ig); ?>"
             target="_blank" rel="noopener"
             class="icon-box hover:scale-110 transition-transform duration-200"
             aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
          <?php endif; ?>
        </div>
      </div>

      <!-- Serviços -->
      <nav aria-label="Serviços">
        <h4 class="text-xs font-bold tracking-widest uppercase text-lime mb-5">Serviços</h4>
        <ul class="flex flex-col gap-3 text-sm text-muted">
          <li><a href="#servicos" class="hover:text-white transition-colors">Tráfego Pago Local</a></li>
          <li><a href="#servicos" class="hover:text-white transition-colors">SEO para Academias</a></li>
          <li><a href="#servicos" class="hover:text-white transition-colors">Sites de Conversão</a></li>
          <li><a href="#servicos" class="hover:text-white transition-colors">Gestão de Redes</a></li>
        </ul>
      </nav>

      <!-- Contato -->
      <div>
        <h4 class="text-xs font-bold tracking-widest uppercase text-lime mb-5">Contato</h4>
        <ul class="flex flex-col gap-3 text-sm text-muted">
          <?php
            $phone = theme_get_field('contact_phone', 'option');
            $email = theme_get_field('contact_email', 'option');
          ?>
          <?php if ($phone): ?>
            <li class="flex items-center gap-2">
              <svg class="w-3.5 h-3.5 text-lime flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <span><?php echo esc_html($phone); ?></span>
            </li>
          <?php endif; ?>
          <?php if ($email): ?>
            <li class="flex items-center gap-2">
              <svg class="w-3.5 h-3.5 text-lime flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <a href="mailto:<?php echo esc_attr($email); ?>" class="hover:text-white transition-colors"><?php echo esc_html($email); ?></a>
            </li>
          <?php endif; ?>
        </ul>
      </div>

    </div>

    <div class="border-t border-white/5 pt-8 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-xs text-muted">&copy; <?php echo esc_html(date('Y')); ?> GymUpper. Todos os direitos reservados.</p>
      <p class="text-xs text-muted">Levamos sua academia ao topo.</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
