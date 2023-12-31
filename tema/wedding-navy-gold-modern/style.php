<?php
$title = get_field('tema');

$cover_background = get_site_url() . '/wp-content/uploads/2023/12/pexels-dmitry-zvolskiy-1676123-Small.jpg';
$galeri1 = get_site_url() . '';

?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Hedvig+Letters+Serif:opsz@12..24&display=swap');

    :root {
        --font-base: 'Hedvig Letters Serif', serif;
        --font-art: 'Great Vibes', cursive;
        --fs-judul: 3em;
        --fs-paragraf: 1em;
        --fw-judul: 700;
        --fw-paragraf: 400;
        --color-bg: #fff;
        --color-base: #c8a051;
        --color-base-transparent25: #c8a05140;
        --waving-deg: 5deg;
    }

    * {
        box-sizing: border-box;
    }

    body {
        background-color: #000000;
        color: #c8a051;
        font-family: var(--font-base);
        box-sizing: border-box;
    }

    img {
        width: 100%;
    }

    input, textarea {
        padding: .5rem 1rem;
        width: 100%;
        border-radius: 8px;
        border: solid 2px var(--color-base);
        outline: none;
        margin: 4px 0;
        background-color: transparent;
        color: var(--color-base);
    }

    ::placeholder {
        color: var(--color-base);
        opacity: .6;
        /* Firefox */
    }

    ::-ms-input-placeholder {
        /* Edge 12 -18 */
        color: var(--color-base);
    }

    button,
    .button {
        background-color: var(--color-base);
        color: var(--color-bg);
        border-radius: 50px;
        padding: .5rem 1rem;
        border: none;
        z-index: 10;
        cursor: pointer;
        text-decoration: none;
    }

    /*Image Background Setting*/
    .bg-image {
        background-position: center;
        background-size: cover;
    }

    #desktop-cover {
        background-image: url('<?php echo $cover_background ?>');
    }

    #floating-cover {
        background-color: var(--color-bg);
        /*background-image: url('<?php echo $cover_background ?>
        ');*/

    }

    /*Main CSS*/
    .bg-layer {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: black;
        opacity: .6;
        z-index: 0;
    }

    .desktop-cover__content {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 2;
    }

    .kepada-yth-wrapper {
        border: solid 2px var(--color-base);
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .kepada-yth-wrapper .nama-tamu {
        font-weight: 700;
    }



    .judul {
        font-family: var(--font-art);
        font-size: var(--fs-judul);
        text-align: center;
    }

    .narasi {
        font-family: var(--color-base);
        font-size: var(--fs-paragraf);
        text-align: center;

    }

    #invitation-container::-webkit-scrollbar {
        display: none;
    }

    #invitation-container {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    #desktop-cover {
        display: none;

    }

    #invitation-container {
        overflow-x: hidden;
    }

    #background {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -1;
        background-color: var(--color-bg);
        height: 100vh;
        width: 100vw;
    }

    #audio{
        position: fixed;
        left: 16px;
        bottom: 16px;
        z-index: 9;
        color: var(--color-bg);
        height: 40px;
        width: 40px;
        background-color: var(--color-base);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

    #audio .audio__icon{
        width: 28px;
        height: 28px;
    }

    #cover,
    #pembuka,
    #mempelai,
    #ayat,
    #acara,
    #countdown,
    #galeri,
    #ucapan,
    #footer {
        padding: 2rem;
        position: relative;
    }

    #cover,
    #floating-cover {
        position: relative;
        display: flex;
        flex-direction: column;
        height: 100vh;
        width: 100%;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background-color: var(--color-bg);
        
    }

    #floating-cover {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 10;
        transition: transform 1.5s;
        transform: translateY(0)
    }

    #floating-cover.opened {
        transform: translateY(-102%);

    }

    .ornament-left {
        position: absolute;
        width: 160px;
        top: 0;
        left: -1.5rem;
    }

    .ornament-right {
        position: absolute;
        width: 120px;
        bottom: -1rem;
        right: .5rem;
    }

    .light-bubble-top {
        position: absolute;
        width: 280px;
        top: 2rem;
        right: -1rem;
    }

    .light-bubble-bottom {
        position: absolute;
        width: 240px;
        bottom: 2rem;
        left: -1rem;
        transform: rotate(180deg);
    }

    .savethedate {
        width: 16rem;
    }

    .savethedate img {
        width: 100%;
        margin: -2rem 0 -4rem;
    }

    .judul-cover {
        font-family: var(--font-base);
        font-size: 1rem;
        text-align: center;

    }


    .mempelai {
        font-family: var(--font-base);
        font-size: 2rem;
        text-align: center;
    }

    .tanggal-cover {
        font-size: 1.5rem;
        padding: 1rem 0;
        border-width: 1px 0;
        border-style: solid;
        border-color: var(--color-base);
    }

    button.open-invitation {
        margin: 2rem 0;

    }

    .narasi-pembuka {
        text-align: center;

    }

    .mempelai1,
    .mempelai2 {
        text-align: center;
    }

    .avatar1, .avatar2{
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 50%;
        margin: 0 auto 1rem;
        
    }
    
    .avatar1 img, .avatar2 img{
        width: 100%;
        object-position: center;
        object-fit: cover;
    }

    .nama-mempelai {
        font-family: var(--font-art);
        font-size: 3rem;

    }

    .mempelai-dan {
        text-align: center;
        font-size: 3rem;
    }

    #ayat .ayat__container {
        border: solid 4px var(--color-base);


    }

    .ayat__konten {
        text-align: center;
    }

    .ayat__sumber {
        text-align: center;
        font-size: 1.5rem;
    }

    .acara__akad,
    .acara__resepsi {
        border: solid 4px var(--color-base);
        margin: 1rem;
        padding: 1rem;
        text-align: center;
    }

    .acara__judul {
        text-align: center;
        font-family: var(--font-art);
        font-size: var(--fs-judul);
    }

    .acara__hari {
        font-weight: 700;
        font-size: 2rem;
    }

    .countdown__container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .countdown__savethedate {
        width: 200px;
    }

    .countdown__savethedate img {
        width: 100%
    }

    .countdown__timer {
        justify-content: center;
    }

    .countdown__card {
        background-color: var(--color-base-transparent25);
        border-radius: .5rem;
        padding: 1rem;
        text-align: center;
        margin: .5rem;
    }

    .countdown__card .count {
        font-size: 3rem;
    }

    .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    .lokasi__button {
        text-align: center;
    }

    .galeri__frame img {
        margin: .25rem 0;
        border-radius: 1rem;
        width: 100%;
        height: 100%;

    }

    .ucapan__message {
        border: solid 2px var(--color-base);
        border-radius: .5rem;
        padding: 1rem 1.5rem;
        margin: 1rem 0
    }

    .ucapan__message__date {
        font-size: .75rem;
    }

    .ucapan__message__title {
        font-size: 1.5rem;
    }

    #footer{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 2rem;
        padding: 1rem 0;
        margin-bottom: 4rem;
    }
    #footer a{
        text-decoration: none;
        background-color: var(--color-base);
        color: var(--color-bg);
        border-radius: 8px;
        padding: .25rem .5rem;
        margin: 0 0 0 .25rem;

    }

    @media screen and (min-width: 768px) {
        #main-container {
            display: flex;
            flex-flow: row wrap;
            justify-content: end;
        }

        #desktop-cover {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 40vw;
        }

        #invitation-container {
            position: relative;

        }

        #floating-cover {
            display: none;
        }


    }
</style>