<?php
$title    = theme_get_field('hero_title') ?: get_bloginfo('name');
$subtitle = theme_get_field('hero_subtitle') ?: get_bloginfo('description');
$cta      = theme_get_field('hero_cta_label') ?: 'Comece agora';
$cta_url  = theme_get_field('hero_cta_url') ?: theme_whatsapp_link();
$image    = theme_get_field('hero_image');
?>
<section class="relative min-h-[90vh] flex items-center justify-center text-white overflow-hidden">
  <?php if ($image): ?>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($image); ?>')"></div>
    <div class="absolute inset-0 bg-black/60"></div>
  <?php else: ?>
    <div class="absolute inset-0 bg-secondary"></div>
  <?php endif; ?>

  <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6"><?php echo esc_html($title); ?></h1>
    <?php if ($subtitle): ?>
      <p class="text-lg md:text-xl text-white/80 mb-8 max-w-2xl mx-auto"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>
    <a href="<?php echo esc_url($cta_url); ?>" class="btn-primary text-lg px-8 py-4"><?php echo esc_html($cta); ?></a>
  </div>
</section>
