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
<body <?php body_class('!bg-[#0b0f1a]'); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="py-5 transition-all duration-300">
  <div style="max-width:1200px" class="mx-auto px-6 flex items-center justify-between">

    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0">
      <img src="<?php echo esc_url(THEME_URI . '/assets/images/logo.svg'); ?>"
           alt="GymUpper" style="height:36px;width:auto">
    </a>

    <nav class="hidden md:flex items-center gap-8 text-sm font-medium" style="color:#c8d0dc">
      <a href="#servicos"      class="hover:text-white transition-colors">Serviços</a>
      <a href="#resultados"    class="hover:text-white transition-colors">Resultados</a>
      <a href="#como-funciona" class="hover:text-white transition-colors">Como funciona</a>
      <a href="#depoimentos"   class="hover:text-white transition-colors">Depoimentos</a>
    </nav>

    <a href="<?php echo esc_url(theme_whatsapp_link('Olá, quero levar minha academia ao topo!')); ?>"
       target="_blank" class="hidden md:inline-flex btn-primary animate-pulse-btn text-sm">
      Falar com especialista
    </a>

    <button id="menu-toggle" class="md:hidden p-2" style="color:#c8d0dc" aria-label="Menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <div id="mobile-menu" class="hidden md:hidden mt-4 border-t" style="border-color:rgba(255,255,255,0.06)">
    <div style="max-width:1200px" class="mx-auto px-6 py-6 flex flex-col gap-5 text-sm font-medium" style="color:#c8d0dc">
      <a href="#servicos"      class="hover:text-white">Serviços</a>
      <a href="#resultados"    class="hover:text-white">Resultados</a>
      <a href="#como-funciona" class="hover:text-white">Como funciona</a>
      <a href="#depoimentos"   class="hover:text-white">Depoimentos</a>
      <a href="<?php echo esc_url(theme_whatsapp_link('Olá, quero levar minha academia ao topo!')); ?>"
         target="_blank" class="btn-primary text-sm justify-center">
        Falar com especialista
      </a>
    </div>
  </div>
</header>

<div style="padding-top:80px">
