<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="py-4 md:py-5">
  <div class="max-w-[1200px] mx-auto px-6 flex items-center justify-between gap-8">

    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0">
      <img src="<?php echo esc_url(THEME_URI . '/assets/images/logo.svg'); ?>"
           alt="GymUpper" class="h-9 w-auto">
    </a>

    <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-subtle">
      <a href="#servicos"       class="hover:text-white transition-colors duration-200">Serviços</a>
      <a href="#resultados"     class="hover:text-white transition-colors duration-200">Resultados</a>
      <a href="#como-funciona"  class="hover:text-white transition-colors duration-200">Como funciona</a>
      <a href="#depoimentos"    class="hover:text-white transition-colors duration-200">Depoimentos</a>
    </nav>

    <a href="<?php echo esc_url(theme_whatsapp_link('Olá, quero levar minha academia ao topo!')); ?>"
       target="_blank" rel="noopener"
       class="btn btn-primary btn-cta-pulse hidden md:inline-flex text-sm py-3 px-5">
      Falar com especialista
    </a>

    <button id="menu-toggle"
            class="md:hidden flex flex-col gap-[5px] p-2 -mr-2"
            aria-label="Abrir menu"
            aria-expanded="false">
      <span class="menu-bar block w-5 h-[2px] bg-subtle rounded-full transition-all duration-300"></span>
      <span class="menu-bar block w-5 h-[2px] bg-subtle rounded-full transition-all duration-300"></span>
      <span class="menu-bar block w-5 h-[2px] bg-subtle rounded-full transition-all duration-300"></span>
    </button>

  </div>

  <div id="mobile-menu" class="md:hidden border-t border-white/5 mt-4">
    <div class="max-w-[1200px] mx-auto px-6 flex flex-col gap-5 text-sm font-medium text-subtle">
      <a href="#servicos"      class="hover:text-white transition-colors pt-1">Serviços</a>
      <a href="#resultados"    class="hover:text-white transition-colors">Resultados</a>
      <a href="#como-funciona" class="hover:text-white transition-colors">Como funciona</a>
      <a href="#depoimentos"   class="hover:text-white transition-colors">Depoimentos</a>
      <a href="<?php echo esc_url(theme_whatsapp_link('Olá, quero levar minha academia ao topo!')); ?>"
         target="_blank" rel="noopener"
         class="btn btn-primary text-sm py-3 text-center w-full">
        Falar com especialista
      </a>
    </div>
  </div>
</header>

<div class="h-[68px] md:h-[76px]"></div>
