<?php
if (!function_exists('acf_add_local_field_group')) return;

acf_add_local_field_group([
    'key'    => 'group_hero',
    'title'  => 'Hero - Seção Principal',
    'fields' => [
        ['key' => 'field_hero_title',     'label' => 'Título',           'name' => 'hero_title',     'type' => 'text'],
        ['key' => 'field_hero_subtitle',  'label' => 'Subtítulo',        'name' => 'hero_subtitle',  'type' => 'textarea', 'rows' => 2],
        ['key' => 'field_hero_cta_label', 'label' => 'Botão - Texto',    'name' => 'hero_cta_label', 'type' => 'text'],
        ['key' => 'field_hero_cta_url',   'label' => 'Botão - Link',     'name' => 'hero_cta_url',   'type' => 'url'],
        ['key' => 'field_hero_image',     'label' => 'Imagem de fundo',  'name' => 'hero_image',     'type' => 'image', 'return_format' => 'url'],
    ],
    'location' => [[['param' => 'page_type', 'operator' => '==', 'value' => 'front_page']]],
]);

acf_add_local_field_group([
    'key'    => 'group_plans',
    'title'  => 'Planos / Preços',
    'fields' => [
        ['key' => 'field_plans_title', 'label' => 'Título da seção', 'name' => 'plans_title', 'type' => 'text'],
        [
            'key'        => 'field_plans_items',
            'label'      => 'Planos',
            'name'       => 'plans_items',
            'type'       => 'repeater',
            'layout'     => 'block',
            'sub_fields' => [
                ['key' => 'field_plan_name',      'label' => 'Nome',       'name' => 'name',      'type' => 'text'],
                ['key' => 'field_plan_price',     'label' => 'Preço',      'name' => 'price',     'type' => 'text'],
                ['key' => 'field_plan_period',    'label' => 'Período',    'name' => 'period',    'type' => 'text'],
                ['key' => 'field_plan_features',  'label' => 'Benefícios', 'name' => 'features',  'type' => 'textarea'],
                ['key' => 'field_plan_cta',       'label' => 'Botão',      'name' => 'cta',       'type' => 'text'],
                ['key' => 'field_plan_highlight', 'label' => 'Destaque?',  'name' => 'highlight', 'type' => 'true_false'],
            ],
        ],
    ],
    'location' => [[['param' => 'page_type', 'operator' => '==', 'value' => 'front_page']]],
]);

acf_add_local_field_group([
    'key'    => 'group_contact',
    'title'  => 'Contato e Localização',
    'fields' => [
        ['key' => 'field_contact_phone',     'label' => 'Telefone/WhatsApp',         'name' => 'contact_phone',    'type' => 'text'],
        ['key' => 'field_contact_email',     'label' => 'Email',                     'name' => 'contact_email',   'type' => 'email'],
        ['key' => 'field_contact_address',   'label' => 'Endereço',                  'name' => 'contact_address', 'type' => 'text'],
        ['key' => 'field_contact_maps_url',  'label' => 'Link Google Maps',          'name' => 'contact_maps_url','type' => 'url'],
        ['key' => 'field_contact_hours',     'label' => 'Horários',                  'name' => 'contact_hours',   'type' => 'textarea', 'rows' => 3],
        ['key' => 'field_contact_whatsapp',  'label' => 'Número WhatsApp (só números)', 'name' => 'contact_whatsapp', 'type' => 'text'],
    ],
    'location' => [[['param' => 'options_page', 'operator' => '==', 'value' => 'theme-settings']]],
]);
