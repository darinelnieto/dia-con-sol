   
<?php
/**
 * 
 * Template Name: single-guide
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain');
$date = get_the_date('j \d\e F Y');
$publication_date = mb_strtoupper($date, 'UTF-8');
$related = new WP_Query(array(
    'post_type'=>'astral_guide',
    'post_status'=>'publish',
    'post_per_page'=>2,
    'orderby'=>'rand'
));
$podcast = get_field('podcast');
?>
<main id="single-guide-template-0c6fac">
    <section class="single-guide">
        <div class="content">
            <div class="single-content">
                <div class="single-feature">
                    <?= get_the_post_thumbnail(); ?>
                    <h1><?= the_title(); ?></h1>
                </div>
                <div class="publication-date">
                    <h3><?= $publication_date; ?></h3>
                </div>
                <div class="description">
                    <?= the_content(); ?>
                </div>
            </div>
            <div class="rigth-content">
                <?php if(!empty($podcast['image']) && !empty($podcast['link'])): $img = $podcast['image']; ?>
                    <a href="<?= $podcast['link'] ?>" target="_blank" class="podcast-link">
                        <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" loading="lazy"/>
                    </a>
                <?php endif; if($related->have_posts()): ?>
                    <div class="related-post">
                        <h2>Contenido destacado</h2>
                        <div class="post-list">
                            <?php 
                                while($related->have_posts()): 
                                $related->the_post(); 
                                setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain');
                                $date = get_the_date('j \d\e F Y');
                                $publication_date = mb_strtoupper($date, 'UTF-8');
                            ?>
                                <div class="card-guide">
                                    <a href="<?= get_the_permalink(); ?>" class="the-guide">
                                        <?= get_the_post_thumbnail(); ?>
                                        <div class="text">
                                            <h3 class="guide-name"><?= get_the_title() ?></h3>
                                            <hr>
                                            <p class="date"><?= $publication_date ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
                    