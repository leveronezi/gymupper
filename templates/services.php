<section id="servicos" style="background:#0b0f1a;position:relative;overflow:hidden">
  <div class="glow-blob" style="width:600px;height:600px;top:50%;left:50%;transform:translate(-50%,-50%);opacity:.2"></div>
  <div class="section-wrap" style="position:relative;z-index:1">

    <div style="text-align:center;margin-bottom:4rem">
      <span class="section-label reveal">O que fazemos</span>
      <h2 class="section-title reveal" style="transition-delay:.1s">
        Tudo que sua academia precisa<br>para <span class="text-gradient">crescer de verdade</span>
      </h2>
      <p class="section-sub reveal" style="margin:0 auto;text-align:center;transition-delay:.2s">
        Estratégias comprovadas para academias que querem encher a grade e ter crescimento previsível.
      </p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem">
      <?php
        $services = [
          [
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>',
            'title' => 'Tráfego Pago Local',
            'desc'  => 'Campanhas no Google e Meta Ads direcionadas para pessoas próximas à sua academia. Leads qualificados com custo controlado.',
            'tags'  => ['Google Ads','Meta Ads','Segmentação local'],
          ],
          [
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>',
            'title' => 'SEO Local',
            'desc'  => 'Apareça em 1º lugar no Google quando alguém pesquisar academia perto de você. Tráfego orgânico e gratuito todo mês.',
            'tags'  => ['Google Meu Negócio','SEO On-page','Link Building'],
          ],
          [
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
            'title' => 'Site de Alta Conversão',
            'desc'  => 'Sites rápidos e otimizados que convertem visitantes em leads. Design profissional com foco em resultados.',
            'tags'  => ['WordPress','Velocidade','Mobile-first'],
          ],
          [
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>',
            'title' => 'Gestão de Redes Sociais',
            'desc'  => 'Conteúdo que engaja e gera autoridade para sua academia. Estratégia, produção e publicação com foco em novos alunos.',
            'tags'  => ['Instagram','TikTok','Reels'],
          ],
        ];
        foreach($services as $i => $s):
      ?>
      <div class="card reveal" style="padding:1.75rem;display:flex;flex-direction:column;gap:1.25rem;transition-delay:<?php echo $i*.1; ?>s">
        <div style="width:3rem;height:3rem;border-radius:.75rem;background:#00c85318;border:1px solid #00c85340;display:flex;align-items:center;justify-content:center">
          <svg style="width:1.4rem;height:1.4rem;stroke:#64dd17" fill="none" viewBox="0 0 24 24">
            <?php echo $s['icon']; ?>
          </svg>
        </div>
        <div>
          <h3 style="font-size:1.1rem;font-weight:700;margin-bottom:.5rem"><?php echo esc_html($s['title']); ?></h3>
          <p style="font-size:.88rem;color:#8892a4;line-height:1.65"><?php echo esc_html($s['desc']); ?></p>
        </div>
        <div style="display:flex;flex-wrap:wrap;gap:.5rem;margin-top:auto">
          <?php foreach($s['tags'] as $tag): ?>
            <span class="badge" style="font-size:.7rem"><?php echo esc_html($tag); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
