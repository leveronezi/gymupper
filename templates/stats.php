<section style="background:#0d1220;border-top:1px solid rgba(255,255,255,.06);border-bottom:1px solid rgba(255,255,255,.06);padding:3rem 1.5rem">
  <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(2,1fr);gap:2rem" class="md:grid-cols-4">
    <?php
      $stats = [
        ['num'=>'+200','label'=>'Academias atendidas'],
        ['num'=>'+8.500','label'=>'Alunos captados'],
        ['num'=>'R$4,80','label'=>'Custo médio por lead'],
        ['num'=>'98%','label'=>'Satisfação dos clientes'],
      ];
      foreach($stats as $i => $s):
    ?>
    <div class="reveal" style="text-align:center;padding:1rem;transition-delay:<?php echo $i*.1; ?>s">
      <p class="stat-number" style="font-size:clamp(2rem,4vw,2.75rem)"><?php echo esc_html($s['num']); ?></p>
      <p style="font-size:.85rem;color:#8892a4;margin-top:.5rem"><?php echo esc_html($s['label']); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>
