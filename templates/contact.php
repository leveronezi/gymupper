<?php
$phone    = theme_get_field('contact_phone', 'option');
$email    = theme_get_field('contact_email', 'option');
$address  = theme_get_field('contact_address', 'option');
$maps_url = theme_get_field('contact_maps_url', 'option');
$hours    = theme_get_field('contact_hours', 'option');

$info = array_filter([
  ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Telefone / WhatsApp', 'value' => $phone],
  ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Email', 'value' => $email],
  ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Endereço', 'value' => $address],
  ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Horários', 'value' => $hours],
], fn($i) => !empty($i['value']));
?>
<section class="section" id="contato">
  <h2 class="section-title">Como nos encontrar</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-8">
    <div class="flex flex-col gap-6">
      <?php foreach ($info as $item): ?>
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo esc_attr($item['icon']); ?>"/>
            </svg>
          </div>
          <div>
            <p class="font-semibold"><?php echo esc_html($item['label']); ?></p>
            <p class="text-slate-500 whitespace-pre-line"><?php echo esc_html($item['value']); ?></p>
            <?php if ($item['label'] === 'Endereço' && $maps_url): ?>
              <a href="<?php echo esc_url($maps_url); ?>" target="_blank" class="text-primary text-sm font-medium hover:underline">Ver no mapa →</a>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if ($maps_url): ?>
      <div class="rounded-2xl overflow-hidden h-80">
        <iframe src="<?php echo esc_url(str_replace('/maps/', '/maps/embed/', $maps_url)); ?>"
                width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>
      </div>
    <?php endif; ?>
  </div>
</section>
