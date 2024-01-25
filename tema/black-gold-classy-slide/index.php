<?php
// Define theme_image function
function theme_image($name)
{
    return get_theme_file_uri('assets/images/') . get_field('tema')->post_name . '/' . $name;
}
//Define fields
$cf = get_fields();
?>

<div class='main-container'>
    <div id="main-carousel" class='splide' aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">Slide 01</li>
                <li class="splide__slide">Slide 02</li>
                <li class="splide__slide">Slide 03</li>
            </ul>
        </div>
    </div>
    <div id="thumbnail-carousel" class='splide' aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">Slide 01</li>
                <li class="splide__slide">Slide 02</li>
                <li class="splide__slide">Slide 03</li>
            </ul>
        </div>
    </div>
    
</div>
<script>
</script>