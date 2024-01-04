jQuery(document).ready(function ($) {
    var siteUrl = 'http://localhost/invait';
    var foundPosts = Number(document.querySelector('#fullpage').dataset.foundPosts);
    var filter = document.querySelector('#fullpage').dataset.filter;
    var fetchedPages = 1;

    $('#fullpage').fullpage({
        //options here
        //licenseKey: null
        //autoScrolling:true,
        //scrollHorizontally: true
        scrollOverflow: false,
        onLeave: onLeaveSlide
    });

    function onLeaveSlide(section, slide, direction) {
        //appendSection();
        var sectionCount = $('#fullpage').children().length;
        var paged = Math.floor(sectionCount / 3) + 1;


        if (sectionCount - slide.index < 3 && direction == 'down') {
            var urlGetTema = () => {
                if (filter) {
                    return 'http://localhost/invait/wp-json/invait/v1/get_tema?paged=' + paged + '&filter=' + filter

                } else {
                    return 'http://localhost/invait/wp-json/invait/v1/get_tema?paged=' + paged
                }
            }
            if (paged > fetchedPages) {
                $.ajax(urlGetTema(), {
                    success: (response) => {
                        for (let i = 0; i < response.length; i++) {
                            if ($('#' + response[i].slug)[0] == undefined) {
                                $('#fullpage').append(sectionTemplateHTML(response[i], slide.index + 3 + i));
                            }
                        }
                        fetchedPages = paged;
                    }
                })
                $.fn.fullpage.reBuild();
            }

        }

    }
    //Remove wm
    var wmEl = document.querySelector('.fp-watermark');
    wmEl.parentNode.removeChild(wmEl);

    //Side menu functionality
    $('body').on('click', '.nav-filter', () => {
        $('.side-menu').addClass('opened');
        $.fn.fullpage.setAllowScrolling(false);
    });
    $('.side-menu .exit').on('click', () => {
        $('.side-menu').removeClass('opened');
        $.fn.fullpage.setAllowScrolling(true);

    });

    //Home button functionality
    $('body').on('click', '.nav-home', () => {
        window.location.href = siteUrl;

    });


    //Define SVGs
    var menuSVG = `
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                        </svg>
    `;
    var homeSVG = `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path
                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
    `;
    var shareSVG = `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z"
                                clip-rule="evenodd" />
                        </svg>
    `;

    var tagsTemplateHTML = (tags) => {
        return tags.map(tag => (`
        <span class='tema__tag'>${tag.name}</span>
        `)).join(' ')
    }

    //Define Section Template
    var sectionTemplateHTML = (tema, indexTema) => (`
        <div id='${tema.slug}' class='section tema-container'>
            <img data-src='${tema.thumbnail}'>
            <div class='tema__content'>
                <div class='invait-logo'>
                    <img data-src='http://localhost/invait/wp-content/uploads/2024/01/logo-invait-retro.png'>
                </div>
                    <div class='tema__kategori'>
                        <?php echo slugToSentence($kategori);; ?>
                    </div>
                    <div class='tema__number'>
                        Tema ke ${indexTema} dari ${foundPosts}
                    </div>
                <div class='content__main'>
                    <div class='tema__tags'>${tagsTemplateHTML(tema.tags)}
                    </div>
                    <div class='tema__judul'>
                    ${tema.title}
                    </div>
                    <div class='tema__button'>
                        <a class='button lihat-demo'
                            href='http://localhost/invait/${tema.slug}'>
                            Lihat Demo
                        </a>
                    </div>
                </div>
                <div class='content__nav'>
                    <button class='button-nav nav-share'>${shareSVG}</button>
                    <button class='button-nav nav-home'>${homeSVG}</button>
                    <button class='button-nav nav-filter'>${menuSVG}</button>
                </div>
            </div>
        </div>
`);

    // Callback function append section
    function appendSection() {
        $('#fullpage').append(sectionTemplateHTML)
    }
});

