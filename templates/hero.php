<section class="relative min-h-screen flex items-center overflow-hidden bg-dark bg-grid-pattern" id="inicio">

  <div class="glow-orb w-[600px] h-[600px] -top-40 -left-32 opacity-60" aria-hidden="true"></div>
  <div class="glow-orb w-[400px] h-[400px] bottom-0 right-0 opacity-30" aria-hidden="true"></div>

  <div class="section-wrap py-20 md:py-28 relative z-10 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20 items-center">

      <div class="hero-fade flex flex-col">
        <div>
          <span class="badge">
            <span class="w-1.5 h-1.5 rounded-full bg-lime inline-block" aria-hidden="true"></span>
            Especialistas em academias
          </span>
        </div>
        <h1 class="text-display mt-5">
          Levamos sua<br>academia ao<br><span class="text-gradient">topo!</span>
        </h1>
        <p class="text-subtle text-lg leading-relaxed mt-6 max-w-[440px]">
          Performance real para academias. Unimos tráfego pago local, SEO e conversão para encher sua grade de alunos todo mês.
        </p>
        <div class="flex flex-wrap items-center gap-4 mt-10">
          <a href="<?php echo esc_url(theme_whatsapp_link('Quero levar minha academia ao topo!')); ?>"
             target="_blank" rel="noopener"
             class="btn btn-primary btn-cta-pulse">
            Quero mais alunos
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          <a href="#como-funciona" class="btn btn-ghost">Ver como funciona</a>
        </div>
        <div class="flex items-center gap-4 mt-10 pt-8 border-t border-white/5">
          <div class="flex -space-x-2.5" aria-hidden="true">
            <?php foreach (['A','B','R','M'] as $initial): ?>
              <div class="avatar-ring"><?php echo esc_html($initial); ?></div>
            <?php endforeach; ?>
          </div>
          <div>
            <div class="flex gap-0.5" aria-label="Avaliação 5 estrelas">
              <?php for ($i = 0; $i < 5; $i++): ?>
                <svg class="w-3.5 h-3.5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
              <?php endfor; ?>
            </div>
            <p class="text-xs text-muted mt-0.5">+200 academias atendidas</p>
          </div>
        </div>
      </div>

      <div class="hidden lg:flex justify-end">
        <div class="relative animate-float">
          <div class="card-metric w-[372px]">
            <div class="metric-glow" aria-hidden="true"></div>
            <div class="relative z-10 flex flex-col gap-5">
              <div class="flex items-start justify-between">
                <div>
                  <p class="text-[10px] text-muted tracking-widest uppercase">Novos alunos / mês</p>
                  <p class="text-4xl font-black text-gradient mt-1 leading-none">+127</p>
                </div>
                <div class="icon-box">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                  </svg>
                </div>
              </div>
              <div class="mini-bar-chart" role="img" aria-label="Gráfico de crescimento mensal">
                <?php foreach ([28,42,36,58,50,72,65,88,80,100] as $h): ?>
                  <div class="mini-bar" style="height:<?php echo esc_attr($h); ?>%"></div>
                <?php endforeach; ?>
              </div>
              <div class="flex justify-between text-[10px] text-muted -mt-2" aria-hidden="true">
                <span>Jan</span><span>Fev</span><span>Mar</span><span>Abr</span><span>Mai</span>
              </div>
              <hr class="border-white/5">
              <div class="grid grid-cols-2 gap-3">
                <div class="mini-stat">
                  <p class="mini-stat-value">+34%</p>
                  <p class="mini-stat-label">Conversão</p>
                </div>
                <div class="mini-stat">
                  <p class="mini-stat-value">↓62%</p>
                  <p class="mini-stat-label">Custo / lead</p>
                </div>
              </div>
            </div>
          </div>
          <div class="floating-badge">
            <p class="floating-badge-value">R$4,80</p>
            <p class="floating-badge-label">custo por lead</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-muted text-[11px] animate-float" aria-hidden="true">
    <span>Role para baixo</span>
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
    </svg>
  </div>

</section>
