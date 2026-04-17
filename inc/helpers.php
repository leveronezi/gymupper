<?php

function theme_get_field(string $field, $post_id = false): string
{
    if (!function_exists('get_field')) return '';
    return (string) (get_field($field, $post_id) ?? '');
}

function theme_whatsapp_link(string $message = ''): string
{
    $number = theme_get_field('contact_whatsapp', 'option');
    if (!$number) return '#';
    $msg = $message ? '?text=' . rawurlencode($message) : '';
    return 'https://wa.me/' . preg_replace('/\D/', '', $number) . $msg;
}

function theme_svg(string $name, string $class = ''): void
{
    $path = get_template_directory() . '/assets/images/icons/' . $name . '.svg';
    if (file_exists($path)) {
        $svg = file_get_contents($path);
        if ($class) {
            $svg = str_replace('<svg', '<svg class="' . esc_attr($class) . '"', $svg);
        }
        echo $svg;
    }
}

function theme_get_plan_features(string $raw): array
{
    return array_filter(array_map('trim', explode("\n", $raw)));
}
