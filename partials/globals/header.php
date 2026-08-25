<?php
$script_handle = 'header-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/header.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: header
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$custom_logo_id = get_theme_mod('custom_logo');
$appoinment = get_field('get_appoinment', 'option');
$validate = get_field('enable_stick_header');
$list_link = get_field('list_of_links', 'option');
?>
<section class="header-partial-b3c1ef <?php if($validate === true): ?>is-absolute<?php endif; ?>">
    <div class="contennt">
        <div class="left">
            <button class="bar-menu">
                <svg class="open" width="54.89" height="41.549" viewBox="0 0 54.89 41.549">
                    <g id="Grupo_1508" data-name="Grupo 1508">
                        <line id="Línea_280" data-name="Línea 280" x2="51.89" transform="translate(1.5 1.5)" fill="none" stroke="<?php if($validate === true): ?>#373a36<?php else: ?>#e6e5de<?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        <line id="Línea_281" data-name="Línea 281" x2="51.89" transform="translate(1.5 20.774)" fill="none" stroke="<?php if($validate === true): ?>#373a36<?php else: ?>#e6e5de<?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        <line id="Línea_282" data-name="Línea 282" x2="51.89" transform="translate(1.5 40.049)" fill="none" stroke="<?php if($validate === true): ?>#373a36<?php else: ?>#e6e5de<?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </g>
                </svg>
                <svg class="close hidden" id="Grupo_1509" data-name="Grupo 1509" width="39.167" height="40.675" viewBox="0 0 39.167 40.675">
                    <defs>
                        <clipPath id="clip-path">
                        <rect id="Rectángulo_1068" data-name="Rectángulo 1068" width="39.167" height="40.675" transform="translate(0 0)" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Grupo_1508" data-name="Grupo 1508" clip-path="url(#clip-path)">
                        <line id="Línea_280" data-name="Línea 280" y1="37.675" x2="35.681" transform="translate(1.743 1.5)" fill="none" stroke="<?php if($validate === true): ?>#373a36<?php else: ?>#e6e5de<?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        <line id="Línea_281" data-name="Línea 281" x2="36.167" y2="37.209" transform="translate(1.5 1.733)" fill="none" stroke="<?php if($validate === true): ?>#373a36<?php else: ?>#e6e5de<?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </g>
                </svg>
            </button>
        </div>
        <div class="center">
            <a href="<?= home_url(); ?>" class="custom-logo">
                <?= wp_get_attachment_image($custom_logo_id, 'full', false, array(
                    'class' =>'logo',
                    'fetchpriority' => 'high',
                    'loading' => 'eager',
                )) ?>
            </a>
        </div>
        <div class="right">
            <?php if(!empty($appoinment)): ?>
                <a href="<?= $appoinment['url']; ?>" target="<?= $appoinment['target']; ?>" class="appoinment d-none d-md-flex">
                    <span><?= $appoinment['title']; ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29.037" height="23.081" viewBox="0 0 29.037 23.081">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectángulo_39" data-name="Rectángulo 39" width="29.037" height="23.081" transform="translate(0 0)" fill="none"/>
                            </clipPath>
                        </defs>
                        <g id="Grupo_30" data-name="Grupo 30" transform="translate(0 0)">
                            <g id="Grupo_29" data-name="Grupo 29" clip-path="url(#clip-path)">
                            <line id="Línea_1" data-name="Línea 1" x1="27.548" transform="translate(0.745 11.54)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                            <path id="Trazado_41" data-name="Trazado 41" d="M17.5,22.336l10.8-10.8L17.5.744" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                            </g>
                        </g>
                    </svg>
                </a>
            <?php endif; ?>
            <a href="<?= home_url(); ?>/mi-cuenta/" class="my-account">
                <svg id="Grupo_1503" data-name="Grupo 1503" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24.109" height="24.107" viewBox="0 0 24.109 24.107">
                    <defs>
                        <clipPath id="clip-path">
                        <rect id="Rectángulo_1065" data-name="Rectángulo 1065" width="24.109" height="24.107" transform="translate(0 0)" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Grupo_1502" data-name="Grupo 1502" clip-path="url(#clip-path)">
                        <path id="Trazado_542" data-name="Trazado 542" d="M12.525,0c.475.09.961.148,1.426.277a6.788,6.788,0,0,1,3.917,2.866,6.669,6.669,0,0,1,1.146,4,6.858,6.858,0,0,1-2.763,5.376c-.067.053-.137.1-.245.186a12.084,12.084,0,0,1,5.872,4.418,11.905,11.905,0,0,1,2.231,6.967h-1.87a10.11,10.11,0,0,0-4.477-8.389,9.767,9.767,0,0,0-6.269-1.754A10.224,10.224,0,0,0,1.872,24.107H0V23.4a1.618,1.618,0,0,0,.04-.2,11.182,11.182,0,0,1,.835-3.6,11.994,11.994,0,0,1,6.954-6.78l.27-.108c-.105-.08-.174-.13-.242-.183A6.86,6.86,0,0,1,5.094,7.148a6.659,6.659,0,0,1,1.145-4A6.785,6.785,0,0,1,10.157.277c.465-.129.95-.187,1.426-.277Zm4.613,6.976a5.085,5.085,0,1,0-5.1,5.077,5.1,5.1,0,0,0,5.1-5.077" fill="#373a36"/>
                    </g>
                </svg>
            </a>
            <button class="open-car" data-target="wcspc-area">
                <svg id="Grupo_1505" data-name="Grupo 1505" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.656" height="24.126" viewBox="0 0 19.656 24.126">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectángulo_1066" data-name="Rectángulo 1066" width="19.656" height="24.126" transform="translate(0 0)" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Grupo_1504" data-name="Grupo 1504" clip-path="url(#clip-path)">
                        <path id="Trazado_543" data-name="Trazado 543" d="M5.068,5.6A5.013,5.013,0,0,1,6.649,1.213,4.6,4.6,0,0,1,9.841,0a4.646,4.646,0,0,1,3.642,1.7,5.121,5.121,0,0,1,1.1,3.9H14.9c.885,0,1.771,0,2.657,0a1.976,1.976,0,0,1,2.1,2.091q0,7.17,0,14.339a1.96,1.96,0,0,1-2.091,2.092q-7.735,0-15.47,0A1.962,1.962,0,0,1,0,22.033Q0,14.864,0,7.694A1.977,1.977,0,0,1,2.1,5.6c.877,0,1.754,0,2.631,0h.336M5.053,7.286H2.189c-.439,0-.5.064-.5.5v14.18c0,.414.061.477.465.477H17.513c.391,0,.458-.067.458-.459q0-7.116,0-14.232c0-.385-.077-.463-.46-.463H14.6v.3c0,.368.01.737,0,1.105a.84.84,0,1,1-1.679-.029c0-.219,0-.438,0-.657V7.308H6.733c0,.493.009.966,0,1.437a.808.808,0,0,1-.618.761.793.793,0,0,1-.895-.338A1.3,1.3,0,0,1,5.06,8.6c-.023-.426-.007-.854-.007-1.313m7.865-1.7c0-.289.008-.576,0-.862A3.077,3.077,0,0,0,8.672,1.911a3.217,3.217,0,0,0-1.9,3.674Z" fill="#373a36"/>
                    </g>
                </svg>
            </button>
            <button data-target="search-contennt" class="search">
                <svg id="Grupo_1507" data-name="Grupo 1507" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23.281" height="24.126" viewBox="0 0 23.281 24.126">
                    <defs>
                        <clipPath id="clip-path">
                        <rect id="Rectángulo_1067" data-name="Rectángulo 1067" width="23.281" height="24.126" transform="translate(0 0)" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Grupo_1506" data-name="Grupo 1506" clip-path="url(#clip-path)">
                        <path id="Trazado_544" data-name="Trazado 544" d="M21.777,24.125a2.173,2.173,0,0,1-.926-.652q-2.679-2.8-5.37-5.589a1.841,1.841,0,0,1-.13-.172,9.629,9.629,0,0,1-8.134,1.426,9.374,9.374,0,0,1-5.612-4.059,9.736,9.736,0,1,1,15.6.932l1.972,2.052c1.219,1.268,2.421,2.554,3.665,3.8a1.3,1.3,0,0,1-.556,2.239c-.014,0-.026.018-.039.026ZM9.731,16.939a7.2,7.2,0,1,0-7.187-7.22,7.2,7.2,0,0,0,7.187,7.22" fill="#373a36"/>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="menu-content">
        <div class="link-list">
            <div class="nav-content">
                <?php wp_nav_menu(['menu' => 'Nav menu']); ?>
                <?php if(!empty($appoinment)): ?>
                    <a href="<?= $appoinment['url']; ?>" target="<?= $appoinment['target']; ?>" class="appoinment d-flex d-md-none">
                        <span><?= $appoinment['title']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29.037" height="23.081" viewBox="0 0 29.037 23.081">
                            <defs>
                                <clipPath id="clip-path">
                                <rect id="Rectángulo_39" data-name="Rectángulo 39" width="29.037" height="23.081" transform="translate(0 0)" fill="none"/>
                                </clipPath>
                            </defs>
                            <g id="Grupo_30" data-name="Grupo 30" transform="translate(0 0)">
                                <g id="Grupo_29" data-name="Grupo 29" clip-path="url(#clip-path)">
                                <line id="Línea_1" data-name="Línea 1" x1="27.548" transform="translate(0.745 11.54)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                                <path id="Trazado_41" data-name="Trazado 41" d="M17.5,22.336l10.8-10.8L17.5.744" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
            <?php if(!empty($list_link)): ?>
                <ul class="link-list-with-image">
                    <?php foreach($list_link as $item): ?>
                        <li class="item-list">
                            <a href="<?= $item['link']['url'] ?? '#'; ?>" target="<?= $item['link']['target'] ?? '_self'; ?>" class="page-link">
                                <div class="img-contain">
                                    <?= wp_get_attachment_image($item['image'] ?? '', 'large', false, array(
                                        'class' => 'item-image',
                                        'loading' => 'lazy',
                                        'decoding' => 'async'
                                    )); ?>
                                </div>
                                <span class="text"><?= $item['link']['title'] ?? ''; ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>