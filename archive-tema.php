<?php get_header();
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'tema',

);
if (isset($_GET['filter'])) {
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'tema',
        'tax_query' => array(
            array(
                'taxonomy' => 'kategori-tema',
                'field' => 'slug',
                'terms' => $_GET['filter'],
            )
        ),
    );
}
$temaResults = new WP_Query($args);
$kategori = isset($_GET['filter']) ? $_GET['filter'] : 'Semua';
//echo json_encode($temaResults);
?>

<style>
    <?php
    include('css/archive-tema.css');
    ?>
</style>
<div class='main-container' data-site-url='<?php echo get_site_url(); ?>'>
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
                <a class='single-tag' href='<?php echo get_site_url() . '/tema'; ?>' data-slug='semua'>
                    <?php echo 'Semua' . ' (' . wp_count_posts('tema')->publish . ')' ?>
                </a>
                <?php $tags = get_terms('kategori-tema');
                function cmp($a, $b)
                {
                    return strcmp($b->count, $a->count);
                }

                usort($tags, "cmp");
                foreach ($tags as $tag) { ?>
                    <a class='single-tag' href='<?php echo get_site_url() . '/tema?filter=' . $tag->slug; ?>'
                        data-slug='<?php echo $tag->slug; ?>'>
                        <?php echo $tag->name . ' (' . $tag->count . ')' ?>
                    </a>

                <?php } ?>
            </div>

        </div>
    </div>


    <!-- Section Fullpage-->
    <div id='fullpage' data-found-posts='<?php echo $temaResults->found_posts; ?>'
        data-filter='<?php echo isset($_GET['filter']) ? $_GET['filter'] : null; ?>'>
        <?php
        foreach ($temaResults->posts as $key => $tema) {

            ?>
            <div id='<?php echo $tema->post_name; ?>' class='section tema-container'>
                <img data-src='<?php echo get_field('thumbnail', $tema->ID); ?>'>
                <div class='tema__content'>
                    <div class='invait-logo'>
                        <img data-src='http://localhost/invait/wp-content/uploads/2024/01/logo-invait-retro.png'>
                    </div>
                    <div class='tema__kategori'>
                        <?php echo slugToSentence($kategori);
                        ; ?>

                    </div>
                    <div class='tema__number'>
                        <?php echo 'Tema ke ' . $key + 1 . ' dari ' . $temaResults->found_posts; ?>
                    </div>
                    <div class='content__main'>
                        <div class='tema__tags'>
                            <?php
                            $terms = get_the_terms($tema->ID, 'kategori-tema');
                            foreach ($terms as $term) { ?>
                                <span class='tema__tag'>
                                    <?php echo $term->name ?>
                                </span>
                            <?php } ?>
                        </div>
                        <div class='tema__judul'>
                            <?php echo $tema->post_title; ?>
                        </div>
                        <div class='tema__button'>
                            <a class='button lihat-demo'
                                href='<?php echo get_site_url() . '/' . get_post_field('post_name', $tema->ID); ?>'>
                                Lihat Demo
                            </a>
                        </div>
                    </div>
                    <div class='content__nav'>
                        <!--
                        <button class='button-nav nav-share'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                            -->
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

    <!--Section Side Menu-->
    <div class='side-menu'>
        <div class='exit'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

        </div>
        <div class='invait-logo-cover'>
            <img src='http://localhost/invait/wp-content/uploads/2024/01/logo-invait-retro.png'>
        </div>
        <div class='invait-logo-cover__text mb-8'>Invait</div>
        <div class='desktop-cover__description'>Scroll ke atas dan ke bawah untuk melihat-lihat tema.</div>
        <div class='desktop-cover__description'>Pilih kategori tema di bawah ini untuk mempersempit pencarian anda.
        </div>
        <div class='tags-wrapper mt-4'>
            <a class='single-tag' href='<?php echo get_site_url() . '/tema'; ?>' data-slug='semua'>
                <?php echo 'Semua' . ' (' . wp_count_posts('tema')->publish . ')' ?>
            </a>
            <?php $tags = get_terms('kategori-tema');

            usort($tags, "cmp");
            foreach ($tags as $tag) { ?>
                <a class='single-tag' href='<?php echo get_site_url() . '/tema?filter=' . $tag->slug; ?>'
                    data-slug='<?php echo $tag->slug; ?>'>
                    <?php echo $tag->name . ' (' . $tag->count . ')' ?>
                </a>

            <?php } ?>
        </div>
        <div class='buat-undangan__button'>
            <a class='button buat-undangan'
                href='https://api.whatsapp.com/send?phone=6287769200273&text=Halo+kak+saya+mau+buat+undangan'>
                Buat Undangan
            </a>
        </div>


    </div>
</div>
<script><?php
//Include JS before </body> tag
include('js/archive-tema.js');
?></script>
<?php get_footer(); ?>