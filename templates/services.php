<section id="servicos" class="bg-dark relative overflow-hidden">

  <div class="glow-orb w-[500px] h-[500px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-20" aria-hidden="true"></div>

  <div class="section-wrap relative z-10">

    <div class="section-header centered stagger">
      <span class="section-label reveal">O que fazemos</span>
      <h2 class="text-h2 reveal">
        Tudo que sua academia precisa<br>
        para <span class="text-gradient">crescer de verdade</span>
      </h2>
      <div class="divider-green reveal"></div>
      <p class="section-sub text-center reveal">
        Estratégias comprovadas para academias que querem encher a grade e ter crescimento previsível todo mês.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 stagger">

      <?php
        $services = [
          [
            'icon_path' => 'M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z',
            'title'     => 'Tráfego Pago Local',
            'desc'      => 'Campanhas cirúrgicas no Google e Meta Ads para pessoas próximas à sua academia. Leads qualificados com custo controlado e rastreável.',
            'tags'      => ['Google Ads', 'Meta Ads', 'Segmentação local'],
          ],
          [
            'icon_path' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z',
            'title'     => 'SEO Local',
            'desc'      => 'Apareça em 1º lugar quando alguém pesquisar academia perto de você. Tráfego orgânico, gratuito e crescente todo mês.',
            'tags'      => ['Google Meu Negócio', 'SEO On-page', 'Link Building'],
          ],
          [
            'icon_path' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
            'title'     => 'Site de Alta Conversão',
            'desc'      => 'Sites rápidos e otimizados que transformam visitantes em leads. Design focado em resultado, mobile-first e carregamento ultrarrápido.',
            'tags'      => ['WordPress', 'Core Web Vitals', 'Mobile-first'],
          ],
          [
            'icon_path' => 'M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z',
            'title'     => 'Gestão de Redes Sociais',
            'desc'      => 'Conteúdo que engaja e gera autoridade para sua academia. Estratégia, produção e publicação com foco em atrair novos alunos.',
            'tags'      => ['Instagram', 'TikTok', 'Reels & Stories'],
          ],
        ];

        foreach ($services as $s):
      ?>
        <article class="card reveal p-7 flex flex-col gap-5">
          <div class="icon-box">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="<?php echo esc_attr($s['icon_path']); ?>"/>
            </svg>
          </div>
          <div>
            <h3 class="text-h3 mb-2"><?php echo esc_html($s['title']); ?></h3>
            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($s['desc']); ?></p>
          </div>
          <div class="flex flex-wrap gap-2 mt-auto">
            <?php foreach ($s['tags'] as $tag): ?>
              <span class="tag"><?php echo esc_html($tag); ?></span>
            <?php endforeach; ?>
          </div>
        </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>
