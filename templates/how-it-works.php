<section id="como-funciona" style="background:#131929;position:relative;overflow:hidden">
  <div class="glow-blob" style="width:500px;height:500px;bottom:0;right:-100px;opacity:.15"></div>
  <div class="section-wrap" style="position:relative;z-index:1">

    <div style="text-align:center;margin-bottom:4rem">
      <span class="section-label reveal">Processo</span>
      <h2 class="section-title reveal" style="transition-delay:.1s">
        Como levamos sua academia<br>ao <span class="text-gradient">próximo nível</span>
      </h2>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:2rem">
      <?php
        $steps = [
          ['n'=>'01','title'=>'Diagnóstico gratuito',    'desc'=>'Analisamos sua academia, concorrência local e oportunidades de crescimento. Sem custo, sem compromisso.'],
          ['n'=>'02','title'=>'Estratégia personalizada','desc'=>'Montamos um plano de ação com metas claras, canais ideais e orçamento otimizado para o seu mercado.'],
          ['n'=>'03','title'=>'Execução e otimização',   'desc'=>'Rodamos as campanhas com monitoramento diário. Ajustamos tudo em tempo real para maximizar resultados.'],
          ['n'=>'04','title'=>'Crescimento previsível',  'desc'=>'Relatórios transparentes e reuniões mensais. Você vê exatamente de onde vêm os novos alunos.'],
        ];
        foreach($steps as $i => $step):
      ?>
      <div class="reveal" style="display:flex;flex-direction:column;gap:1rem;transition-delay:<?php echo $i * .12; ?>s">
        <div class="step-num"><?php echo esc_html($step['n']); ?></div>
        <h3 style="font-size:1.05rem;font-weight:700"><?php echo esc_html($step['title']); ?></h3>
        <p style="font-size:.875rem;color:#8892a4;line-height:1.65"><?php echo esc_html($step['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="reveal" style="text-align:center;margin-top:4rem">
      <a href="<?php echo esc_url(theme_whatsapp_link('Quero o diagnostico gratuito da minha academia!')); ?>"
         target="_blank" class="btn-primary" style="font-size:1rem;padding:1rem 2.5rem">
        Quero meu diagnóstico gratuito
        <svg style="width:1.1rem;height:1.1rem" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </div>
</section>
