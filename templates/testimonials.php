<section id="depoimentos" style="background:#0b0f1a;position:relative;overflow:hidden">
  <div class="glow-blob" style="width:600px;height:600px;top:-100px;left:-200px;opacity:.15"></div>
  <div class="section-wrap" style="position:relative;z-index:1">

    <div style="text-align:center;margin-bottom:4rem">
      <span class="section-label reveal">Depoimentos</span>
      <h2 class="section-title reveal" style="transition-delay:.1s">
        Academias que foram ao <span class="text-gradient">topo</span>
      </h2>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(290px,1fr));gap:1.5rem">
      <?php
        $testimonials = [
          ['name'=>'Carlos Henrique','gym'=>'Academia FitZone - SP',
           'text'=>'Em 3 meses saimos de 120 para 280 alunos ativos. O investimento em trafego pago se pagou na primeira semana do segundo mes.'],
          ['name'=>'Mariana Torres','gym'=>'Studio Move - MG',
           'text'=>'Antes nao aparecia nem na primeira pagina do Google. Hoje sou a primeira academia a aparecer para quem busca na minha cidade.'],
          ['name'=>'Rafael Mendes','gym'=>'Power Gym - RS',
           'text'=>'Alem de trazer novos alunos, criaram nosso site e gerenciam nosso Instagram. Resultado: 40% de aumento no faturamento.'],
        ];
        foreach($testimonials as $i => $t):
      ?>
      <div class="card reveal" style="padding:1.75rem;display:flex;flex-direction:column;gap:1.25rem;transition-delay:<?php echo $i * .1; ?>s">
        <div style="color:#f59e0b;font-size:.9rem;letter-spacing:2px">★★★★★</div>
        <p style="font-size:.9rem;color:#c8d0dc;line-height:1.7;font-style:italic">
          "<?php echo esc_html($t['text']); ?>"
        </p>
        <div style="display:flex;align-items:center;gap:.75rem;margin-top:auto;padding-top:1rem;border-top:1px solid rgba(255,255,255,.06)">
          <div style="width:2.5rem;height:2.5rem;border-radius:50%;background:linear-gradient(135deg,#00c853,#64dd17);display:flex;align-items:center;justify-content:center;font-weight:800;color:#0b0f1a;font-size:.9rem;flex-shrink:0">
            <?php echo esc_html(mb_substr($t['name'], 0, 1)); ?>
          </div>
          <div>
            <p style="font-size:.875rem;font-weight:700"><?php echo esc_html($t['name']); ?></p>
            <p style="font-size:.75rem;color:#8892a4"><?php echo esc_html($t['gym']); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
