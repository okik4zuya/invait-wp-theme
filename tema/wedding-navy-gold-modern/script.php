<?php
$invitationId = get_the_ID();
$siteUrl = get_site_url();
$isEnabledAudio = get_field('fitur_audio');
?>
<script>
    jQuery(document).ready(function ($) {
        // Open invitation
        var audioEl = $('#audio audio')[0];
        function refreshAudioIcon() {
            var playSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
            </svg>
            `;
            var pauseSVG = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M6.75 5.25a.75.75 0 0 1 .75-.75H9a.75.75 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75H7.5a.75.75 0 0 1-.75-.75V5.25Zm7.5 0A.75.75 0 0 1 15 4.5h1.5a.75.75 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75H15a.75.75 0 0 1-.75-.75V5.25Z" clip-rule="evenodd" />
            </svg>
            `;
            if (audioEl.paused == true) {
                $('#audio .audio__icon').html(playSVG);
            } else {
                $('#audio .audio__icon').html(pauseSVG);
            }

        }
        $('.open-invitation').on('click', () => {
            $('#floating-cover').addClass('opened');
            <?php
            if ($isEnabledAudio == true) { ?>
                audioEl.play();
                refreshAudioIcon();
            <?php } ?>
        })

        // Setting Audio FUnctionality

        $('#audio').on('click', () => {
            if (audioEl.paused == true) {
                audioEl.play();
            } else {
                audioEl.pause();
            }
            refreshAudioIcon();
        })


        // Ucapan List
        var messageUrl = '<?php echo $siteUrl ?>' + '/wp-json/invait/v1/filter_message?invitation_id=' + <?php echo $invitationId ?>;
        var messageTemplate = (data) => (`
        <div class='ucapan__message' data-aos='zoom-in'>
            <div class='ucapan__message__date mb-2'>${data.date}</div>
            <div class='ucapan__message__title'>${data.title}</div>
            <div class='ucapan__message__content'>${data.content}</div>
        </div>
        `);
        dayjs.locale('id');
        dayjs.extend(window.dayjs_plugin_relativeTime);

        function injectUcapanList(data) {
            $.each(data, (i, message) => {
                $('.ucapan__list').append(messageTemplate({
                    date: dayjs(message.date.date).fromNow(),
                    title: message.title,
                    content: message.content
                }))
            })
        }
        $.getJSON(messageUrl, (data) => {
            injectUcapanList(data);
        })


        // Kirim Ucapan
        function createMessage() {
            $.ajax({
                url: '<?php echo $siteUrl ?>' + '/wp-json/invait/v1/create_message',
                type: 'POST',
                data: {
                    'title': $('#ucapan__input__title').val(),
                    'content': $('#ucapan__input__content').val(),
                    'invitation_id': '<?php echo $invitationId ?>'
                },
                success: response => {
                    $('.ucapan__list').prepend(messageTemplate({
                        date: dayjs().fromNow(),
                        title: $('#ucapan__input__title').val(),
                        content: $('#ucapan__input__content').val()
                    }))
                    $('#ucapan__input__title').val('');
                    $('#ucapan__input__content').val('');
                    console.log(response)
                },
                error: response => {
                    $('.ucapan__list').html('Mohon maaf pesan anda tidak terkirim...');
                }
            });
        }

        $('.kirim-ucapan').on('click', () => {
            createMessage();
        })

    });



</script>