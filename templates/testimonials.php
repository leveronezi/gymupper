<section id="depoimentos" class="bg-dark relative overflow-hidden">

  <div class="glow-orb w-[500px] h-[500px] -top-20 -left-40 opacity-15" aria-hidden="true"></div>

  <div class="section-wrap relative z-10">

    <div class="section-header centered stagger">
      <span class="section-label reveal">Depoimentos</span>
      <h2 class="text-h2 reveal">
        Academias que foram ao <span class="text-gradient">topo</span>
      </h2>
      <div class="divider-green reveal"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 stagger">

      <?php
        $testimonials = [
          [
            'name'  => 'Carlos Henrique',
            'gym'   => 'Academia FitZone — SP',
            'text'  => 'Em 3 meses saímos de 120 para 280 alunos ativos. O investimento em tráfego pago se pagou ainda no primeiro mês.',
            'color' => 'from-green-800 to-green-600',
          ],
          [
            'name'  => 'Mariana Torres',
            'gym'   => 'Studio Move — MG',
            'text'  => 'Antes não aparecia nem na primeira página do Google. Hoje sou a primeira academia para quem busca na minha cidade.',
            'color' => 'from-emerald-800 to-lime-600',
          ],
          [
            'name'  => 'Rafael Mendes',
            'gym'   => 'Power Gym — RS',
            'text'  => 'Criaram nosso site, gerenciam o Instagram e rodam os anúncios. Resultado: 40% de aumento no faturamento.',
            'color' => 'from-teal-800 to-green-600',
          ],
        ];
        foreach ($testimonials as $t):
      ?>
        <article class="card reveal p-7 flex flex-col gap-5">

          <!-- Stars -->
          <div class="flex gap-0.5" aria-label="Avaliação 5 estrelas">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            <?php endfor; ?>
          </div>

          <!-- Quote -->
          <blockquote class="text-subtle text-sm leading-relaxed flex-1">
            "<?php echo esc_html($t['text']); ?>"
          </blockquote>

          <!-- Author -->
          <div class="flex items-center gap-3 pt-5 border-t border-white/5">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br <?php echo esc_attr($t['color']); ?> flex items-center justify-center text-sm font-bold text-white flex-shrink-0" aria-hidden="true">
              <?php echo esc_html(mb_substr($t['name'], 0, 1)); ?>
            </div>
            <div>
              <p class="text-sm font-semibold"><?php echo esc_html($t['name']); ?></p>
              <p class="text-xs text-muted"><?php echo esc_html($t['gym']); ?></p>
            </div>
          </div>

        </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>
