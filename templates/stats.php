<section id="resultados" class="bg-surface border-y border-white/5">
  <div class="max-w-[1200px] mx-auto px-6 py-12">
    <div class="grid grid-cols-2 lg:grid-cols-4 stagger">

      <?php
        $stats = [
          ['num' => '+200',    'label' => 'Academias atendidas',   'suffix' => ''],
          ['num' => '+8.500',  'label' => 'Alunos captados',       'suffix' => ''],
          ['num' => 'R$4,80',  'label' => 'Custo médio por lead',  'suffix' => ''],
          ['num' => '98%',     'label' => 'Clientes satisfeitos',  'suffix' => ''],
        ];
        foreach ($stats as $s):
      ?>
        <div class="reveal stat-cell flex flex-col items-center text-center py-6 px-4">
          <p class="text-3xl md:text-4xl font-black text-gradient"><?php echo esc_html($s['num']); ?></p>
          <p class="text-sm text-muted mt-2"><?php echo esc_html($s['label']); ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
