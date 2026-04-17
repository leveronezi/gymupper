<section id="como-funciona" class="bg-surface relative overflow-hidden">

  <div class="glow-orb w-[500px] h-[500px] bottom-0 right-0 opacity-15" aria-hidden="true"></div>

  <div class="section-wrap relative z-10">

    <div class="section-header centered stagger">
      <span class="section-label">Processo</span>
      <h2 class="text-h2">
        Como levamos sua academia<br>
        ao <span class="text-gradient">próximo nível</span>
      </h2>
      <div class="divider-green"></div>
      <p class="section-sub text-center">
        Um processo transparente, com metas claras e relatórios reais. Você vê cada resultado acontecer.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 stagger">

      <?php
        $steps = [
          ['n' => '01', 'title' => 'Diagnóstico gratuito',     'desc' => 'Analisamos sua academia, concorrência local e oportunidades. Sem custo, sem compromisso.'],
          ['n' => '02', 'title' => 'Estratégia personalizada', 'desc' => 'Plano de ação com metas claras, canais ideais e orçamento otimizado para o seu mercado.'],
          ['n' => '03', 'title' => 'Execução e otimização',    'desc' => 'Campanhas rodando com monitoramento diário. Ajustes em tempo real para maximizar resultado.'],
          ['n' => '04', 'title' => 'Crescimento previsível',   'desc' => 'Relatórios mensais transparentes. Você vê exatamente de onde vêm os novos alunos.'],
        ];
        foreach ($steps as $step):
      ?>
        <div class="reveal flex flex-col gap-4">
          <div class="step-num" aria-hidden="true"><?php echo esc_html($step['n']); ?></div>
          <h3 class="text-h3"><?php echo esc_html($step['title']); ?></h3>
          <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($step['desc']); ?></p>
        </div>
      <?php endforeach; ?>

    </div>

    <div class="reveal flex justify-center mt-14">
      <a href="<?php echo esc_url(theme_whatsapp_link('Quero meu diagnóstico gratuito!')); ?>"
         target="_blank" rel="noopener"
         class="btn btn-primary">
        Quero meu diagnóstico gratuito
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>

  </div>
</section>
