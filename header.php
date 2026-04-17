<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-sm">
  <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">

    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
      <?php if (has_custom_logo()): the_custom_logo();
      else: ?><span class="text-xl font-bold text-primary"><?php bloginfo('name'); ?></span>
      <?php endif; ?>
    </a>

    <nav class="hidden md:flex items-center gap-6">
      <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'flex items-center gap-6', 'fallback_cb' => false]); ?>
    </nav>

    <?php $whatsapp = theme_whatsapp_link('Olá, gostaria de mais informações!'); ?>
    <a href="<?php echo esc_url($whatsapp); ?>" target="_blank" class="hidden md:inline-block btn-primary text-sm">
      Fale Conosco
    </a>

    <button id="menu-toggle" class="md:hidden p-2 text-slate-700" aria-label="Menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 px-4 py-4">
    <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'flex flex-col gap-4', 'fallback_cb' => false]); ?>
    <a href="<?php echo esc_url($whatsapp); ?>" target="_blank" class="btn-primary text-sm text-center">Fale Conosco</a>
  </div>
</header>

<div class="pt-[72px]">
