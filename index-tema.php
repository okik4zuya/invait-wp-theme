<?php get_header();
?>

<style>
    <?php
    include('css/main.css');
    ?>
</style>
<div class='main-container'>
    <div id='desktop-cover' class='bg-image pure-u-5-8'>
        <div class='desktop-cover__content'>
            <div class='invait-logo-cover'>
                <img src='http://localhost/invait/wp-content/uploads/2024/01/logo-invait-retro.png'>
            </div>
            <div class='invait-logo-cover__text mb-8'>Invait</div>
            <div class='desktop-cover__description'>Scroll ke atas dan ke bawah untuk melihat-lihat tema.</div>
            <div class='desktop-cover__description'>Pilih kategori tema di bawah ini untuk mempersempit pencarian anda.
            </div>

            <div class='tags-wrapper mt-4'>
                <a class='single-tag'>
                    <?php echo 'Semua' . ' (' . wp_count_posts('tema')->publish . ')' ?>
                </a>
                <?php $tags = get_terms('kategori-tema');
                function cmp($a, $b)
                {
                    return strcmp($b->count, $a->count);
                }

                usort($tags, "cmp");
                foreach ($tags as $tag) { ?>
                    <a class='single-tag'>
                        <?php echo $tag->name . ' (' . $tag->count . ')' ?>
                    </a>

                <?php } ?>
            </div>

        </div>
    </div>

    <div id='fullpage'>
        <?php
        $args = array(
            'posts_per_page' => 5,
            'post_type' => 'tema',
        );
        $temaResults = new WP_Query($args);
        while ($temaResults->have_posts()) {
            $temaResults->the_post(); ?>
            <div class='section tema-container'>
                <img data-src='<?php echo get_field('thumbnail'); ?>'>
                <div class='tema__content'>
                    <div class='invait-logo'>
                        <img data-src='http://localhost/invait/wp-content/uploads/2024/01/logo-invait-retro.png'>
                        <div class='invait-logo-text'>Invait</div>
                    </div>
                    <div class='content__main'>
                        <div class='tema__tags'>
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'kategori-tema');
                            foreach ($terms as $term) { ?>
                                <span class='tema__tag'>
                                    <?php echo $term->name ?>
                                </span>
                            <?php } ?>
                        </div>
                        <div class='tema__judul'>
                            <?php echo get_the_title(); ?>
                        </div>
                        <div class='tema__button'>
                            <a class='button lihat-demo'
                                href='<?php echo get_site_url() . '/' . get_post_field('post_name'); ?>'>
                                Lihat Demo
                            </a>
                        </div>
                    </div>
                    <div class='content__nav'>
                        <button class='button-nav nav-share'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                        <button class='button-nav nav-home'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path
                                    d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                        </button>
                        <button class='button-nav nav-filter'>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<script><?php
//Include JS before </body> tag
include('js/main.js');
include('js/fullpage-init.js');
?></script>