jQuery(document).ready(function ($) {
    // Add active class to single-tag
    var filter = document.querySelector('#fullpage').dataset.filter;
    if(filter){
        $('[data-slug='+filter+']').addClass('single-tag--active')
    }else{
        $('[data-slug=semua]').addClass('single-tag--active')
    }

});

