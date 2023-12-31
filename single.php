<?php get_header(); ?>
<?php
while (have_posts()) {
    the_post();
} ?>
<style>
    <?php
    //Include style
    include('css/lib/aos.css');
    include('css/animation.css');
    ?>
</style>

<?php
//Include main style
get_template_part('tema/' . get_field('tema')->post_name . '/style');
?>

<?php
//Include main template
get_template_part('tema/' . get_field('tema')->post_name . '/index');
?>

<script><?php
//Include JS before </body> tag
include('js/lib/dayjs.js');
include('js/lib/dayjs-relativetime.js');
include('js/lib/dayjs-locale-id.js');
include('js/lib/aos.js');
include('js/aos-init.js');
?></script>

<?php
get_template_part('js/countdown-js');
?>

<?php
get_template_part('tema/' . get_field('tema')->post_name . '/script');
?>

<?php get_footer(); ?>