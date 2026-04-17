<?php
$title = theme_get_field('plans_title') ?: 'Nossos Planos';
$plans = get_field('plans_items');
if (!$plans) return;
?>
<section class="bg-slate-50 py-16" id="planos">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="section-title"><?php echo esc_html($title); ?></h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
      <?php foreach ($plans as $plan):
        $highlight = !empty($plan['highlight']);
        $features  = theme_get_plan_features($plan['features'] ?? '');
      ?>
        <div class="rounded-2xl p-8 flex flex-col <?php echo $highlight ? 'bg-primary text-white shadow-xl scale-105' : 'bg-white text-slate-800 shadow'; ?>">
          <div class="mb-6">
            <h3 class="text-xl font-bold mb-1"><?php echo esc_html($plan['name']); ?></h3>
            <div class="text-4xl font-bold">
              <?php echo esc_html($plan['price']); ?>
              <span class="text-base font-normal opacity-70">/<?php echo esc_html($plan['period']); ?></span>
            </div>
          </div>
          <?php if ($features): ?>
            <ul class="flex flex-col gap-3 mb-8 flex-1">
              <?php foreach ($features as $feat): ?>
                <li class="flex items-start gap-2 text-sm">
                  <svg class="w-5 h-5 shrink-0 mt-0.5 <?php echo $highlight ? 'text-white' : 'text-primary'; ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                  <?php echo esc_html($feat); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <a href="<?php echo esc_url(theme_whatsapp_link('Quero contratar o plano ' . $plan['name'])); ?>"
             target="_blank"
             class="text-center px-6 py-3 rounded-lg font-semibold transition-colors <?php echo $highlight ? 'bg-white text-primary hover:bg-white/90' : 'bg-primary text-white hover:opacity-90'; ?>">
            <?php echo esc_html($plan['cta'] ?: 'Contratar'); ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
