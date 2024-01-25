<?php

// Helper function
// iie: insert if exists
function iie($value, $fallback)
{
    return !empty($value) ? $value : $fallback;
}

//define assets
$savethedate = get_site_url() . '/wp-content/uploads/2023/12/save-the-date.png';
$ornament_left = get_site_url() . '/wp-content/uploads/2023/12/ornament-left.png';
$ornament_right = get_site_url() . '/wp-content/uploads/2023/12/ornament-right.png';
$light_bubble = get_site_url() . '/wp-content/uploads/2023/12/light-bubble.png';

//Define features
$is_enabled_audio = get_field('fitur_audio');
$is_enabled_ayat = get_field('fitur_ayat');
$is_enabled_countdown = get_field('fitur_countdown');
$is_enabled_lokasi = get_field('fitur_lokasi');
$is_enabled_galeri = get_field('fitur_galeri');

//Define fields
// Section Cover
$judul_cover = iie(get_field('judul_cover'), 'The Wedding Of');
$nama1 = iie(get_field('nama_1'), 'Farah');
$nama2 = iie(get_field('nama_2'), 'Farhan');
$teks_tanggal = iie(get_field('teks_tanggal'), '20 Februari 2024');

$nama_tamu = isset($_GET['to']) ? $_GET['to'] : 'Tamu Undangan';

// Section Pembuka
$narasi_pembuka = iie(get_field('narasi_pembuka'), "Assalamu'alaikum warahmatullahi wabarakatuh<br>Dengan ini kami mengundang Bapak/Ibu/Saudara/I untuk hadir pada acar pernikahan dan resepsi:");

// Section Mempelai
$avatar1 = get_field('avatar_1');
$nama1_lengkap = iie(get_field('nama_1_lengkap'), 'Farah Fathiya');
$ortu1 = iie(get_field('ortu_1'), 'Putri ke-3 dari Bapak Ahmad dan Ibu Hamidah');
$avatar2 = get_field('avatar_2');
$nama2_lengkap = iie(get_field('nama_2_lengkap'), 'Farhan Cendikia');
$ortu2 = iie(get_field('ortu_2'), 'Putra ke-2 dari Bapak Mahmud dan Ibu Mahmudah');

// Section Ayat
$ayat_konten = iie(get_field('ayat_konten'), 'Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.');
$ayat_sumber = iie(get_field('ayat_sumber'), 'Q.S. Ar-Rum: 21');

// Section Acara
$judul_acara = iie(get_field('judul_acara'), 'Acara');
$narasi_acara = iie(get_field('narasi_acara'), 'Akad dan resepsi insyaallah akan dilaksanakan pada:');
$acara1_judul = iie(get_field('acara1_judul'), 'Akad');
$acara1_hari = iie(get_field('acara1_hari'), 'Ahad');
$acara1_tanggal = iie(get_field('acara1_tanggal'), '20 Februari 2024');
$acara1_jam = iie(get_field('acara1_jam'), '08.00 - 09.00');
$acara1_lokasi = iie(get_field('acara1_lokasi'), 'PUSDAI Bandung <br> Jl. Diponegoro No. 29, Kota Bandung');
$acara2_judul = iie(get_field('acara2_judul'), 'Resepsi');
$acara2_hari = iie(get_field('acara2_hari'), 'Ahad');
$acara2_tanggal = iie(get_field('acara2_tanggal'), '20 Februari 2024');
$acara2_jam = iie(get_field('acara2_jam'), '09.00 s.d. selesai');
$acara2_lokasi = iie(get_field('acara2_lokasi'), 'PUSDAI Bandung <br> Jl. Diponegoro No. 29, Kota Bandung');
$acara3_judul = iie(get_field('acara3_judul'), '');
$acara3_hari = iie(get_field('acara3_hari'), '');
$acara3_jam = iie(get_field('acara3_jam'), '');
$acara3_lokasi = iie(get_field('acara3_lokasi'), '');

// Section Countdown
$judul_countdown = iie(get_field('judul_countdown'), 'Hitung Mundur');
$countdown_time = iie(get_field('countdown_time'), 'Aug 5, 2024 09:00:00'); // Jangan lupa ganti countdown time di countdown-js.php

// Section Lokasi
$judul_lokasi = iie(get_field('judul_lokasi'), 'Lokasi');
$narasi_lokasi = iie(get_field('narasi_lokasi'), '');
$maps_iframe = iie(get_field('maps_iframe'), 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9206460410383!2d107.62321137419254!3d-6.900093767524168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b3b899fb6b%3A0xc02699f02bd39ae3!2sMasjid%20Pusdai%2C%20Jl.%20Diponegoro%20No.63%2C%20Citarum%2C%20Bandung%20Wetan%2C%20Bandung%20City%2C%20West%20Java%2040115!5e0!3m2!1sen!2sid!4v1703666868955!5m2!1sen!2sid');
$maps_link = iie(get_field('maps_link'), 'https://maps.app.goo.gl/UyRDG7QiMQz4wRRV6');
$detail_lokasi = iie(get_field('detail_lokasi'), 'Masjid PUSDAI Bandung <br> Jl. Diponegoro No. 63, Kota Bandung');

// Section Galeri
$judul_galeri = iie(get_field('judul_galeri'), 'Galeri');
$narasi_galeri = iie(get_field('narasi_galeri'), '');
$galeri_foto = get_field('galeri_foto');
$photo_array = isset($galeri_foto) ? array($galeri_foto['foto1'], $galeri_foto['foto2'], $galeri_foto['foto3'], $galeri_foto['foto4'], $galeri_foto['foto5'], $galeri_foto['foto6'], $galeri_foto['foto7'], $galeri_foto['foto8'], $galeri_foto['foto9'], $galeri_foto['foto10']) : null;

// Section Ucapan
$judul_ucapan = iie(get_field('judul_ucapan'), 'Ucapan');
$narasi_ucapan = iie(get_field('narasi_ucapan'), 'Sampaikan doa terbaik anda kepada kedua mempelai.');

// Section Audio
$audio_src = get_field('audio_src');



?>

<div id='main-container'>
    <?php if ($is_enabled_audio == true) { ?>
        <div id='audio'>
            <audio loop='true'>
                <source src='<?php echo $audio_src ?>' type="audio/mpeg" />
            </audio>
            <div class='audio__icon'></div>
        </div>
    <?php } ?>

    <div id='desktop-cover' class='bg-image pure-u-5-8'>
        <div class='bg-layer'></div>
        <div class='desktop-cover__content'>
            <div class="savethedate"> <img src='<?php echo $savethedate; ?>'></img> </div>
            <div class='judul-cover'>
                <?php echo $judul_cover; ?>
            </div>
            <div class='mempelai'>
                <?php echo $nama1; ?> &
                <?php echo $nama2; ?>
            </div>
            <div class='tanggal-cover mt-8'>
                <?php echo $teks_tanggal; ?>
            </div>
            <div class='kepada-yth-wrapper p-4 mt-8'>
                <div class='kepada-yth'>Kepada Yth.</div>
                <div class='nama-tamu mt-4'>
                    <?php echo $nama_tamu ?>
                </div>
            </div>
        </div>
    </div>

    <div id='invitation-container' class='pure-u-1 pure-u-md-3-8'>
        <!-- Background -->
        <section id='background' class='bg-image'>
            <div class='ornament-left waving'> <img src='<?php echo $ornament_left; ?>' /> </div>
            <div class='ornament-right waving'> <img src='<?php echo $ornament_right; ?>' /> </div>
            <div class='light-bubble-top'> <img src='<?php echo $light_bubble; ?>' /> </div>
            <div class='light-bubble-bottom'> <img src='<?php echo $light_bubble; ?>' /> </div>
        </section>
        <!-- Section Floating Cover -->
        <section id='floating-cover' class='bg-image'>
            <div class='ornament-left waving'> <img src='<?php echo $ornament_left; ?>' /> </div>
            <div class='ornament-right waving'> <img src='<?php echo $ornament_right; ?>' /> </div>
            <div class='light-bubble-top'> <img src='<?php echo $light_bubble; ?>' /> </div>
            <div class='light-bubble-bottom'> <img src='<?php echo $light_bubble; ?>' /> </div>
            <div class='judul-cover'>
                <?php echo $judul_cover; ?>
            </div>
            <div class='mempelai'>
                <?php echo $nama1; ?> &
                <?php echo $nama2; ?>
            </div>
            <div class="savethedate"> <img src='<?php echo $savethedate; ?>'></img> </div>
            <div class='tanggal-cover'>
                <?php echo $teks_tanggal; ?>
            </div>
            <div class='kepada-yth mt-8'>Kepada Yth.</div>
            <div class='nama-tamu mt-4'>
                <?php echo !empty($nama_tamu) ? $nama_tamu : 'Nama Tamu' ?>
            </div>
            <button class='open-invitation'>Buka undangan</button>
        </section>

        <!-- Section Cover -->
        <section id='cover' data-bg='#c8a051'>
            <div class='ornament-left waving'> <img src='<?php echo $ornament_left; ?>' /> </div>
            <div class='ornament-right waving'> <img src='<?php echo $ornament_right; ?>' /> </div>
            <div class='light-bubble-top'> <img src='<?php echo $light_bubble; ?>' /> </div>
            <div class='light-bubble-bottom'> <img src='<?php echo $light_bubble; ?>' /> </div>
            <div class='judul-cover'>
                <?php echo $judul_cover; ?>
            </div>
            <div class='mempelai'>
                <?php echo $nama1; ?> &
                <?php echo $nama2; ?>
            </div>
            <div class='tanggal-cover mt-8'>
                <?php echo $teks_tanggal; ?>
            </div>
        </section>

        <!-- Section Pembuka-->
        <section id='pembuka'>
            <div class='narasi-pembuka' data-aos='fade-right'>
                <?php echo $narasi_pembuka; ?>
            </div>
        </section>

        <!-- Section Mempelai-->
        <section id='mempelai' class='-mt-12'>
            <div class='mempelai1' data-aos='fade-up'>
                <?php if (!empty($avatar1)) { ?>
                    <div class='avatar1'> <img src='<?php echo $avatar1; ?>' /> </div>
                <?php } ?>

                <div class='nama-mempelai'>
                    <?php echo $nama1_lengkap; ?>
                </div>
                <div class='ortu-mempelai'>
                    <?php echo $ortu1; ?>
                </div>
            </div>
            <div class='mempelai-dan mt-3 mb-2' data-aos='zoom-in'>&</div>
            <div class='mempelai2' data-aos='fade-down'>
                <?php if (!empty($avatar2)) { ?>
                    <div class='avatar2'> <img src='<?php echo $avatar2; ?>' /> </div>
                <?php } ?>
                <div class='nama-mempelai'>
                    <?php echo $nama2_lengkap; ?>
                </div>
                <div class='ortu-mempelai'>
                    <?php echo $ortu2; ?>
                </div>
            </div>
        </section>

        <!-- Section Ayat -->
        <?php
        if ($is_enabled_ayat == true) {
            ?>
            <section id='ayat' class='mt-2'>
                <div class='ayat__container p-6' data-aos='fade-left'>
                    <div class='ayat__konten'>
                        <?php echo $ayat_konten; ?>
                    </div>
                    <div class='ayat__sumber mt-4'>(
                        <?php echo $ayat_sumber; ?>)
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Section Acara-->
        <section id='acara'>
            <div class='acara__judul judul' data-aos='fade-down'>
                <?php echo $judul_acara; ?>
            </div>
            <div class='acara__narasi narasi' data-aos='fade-down'>
                <?php echo $narasi_acara; ?>
            </div>
            <div class='acara__container mt-4 pure-g'>
                <div class='acara__akad pure-u-1 pure-u-md-1/2' data-aos='fade-left'>
                    <div class='acara__judul'>
                        <?php echo $acara1_judul; ?>
                    </div>
                    <div class='acara__hari mt-2'>
                        <?php echo $acara1_hari ?>
                    </div>
                    <div class='acara__tanggal mt-2'>
                        <?php echo $acara1_tanggal ?>
                    </div>
                    <div class='acara__jam mt-2'>
                        <?php echo $acara1_jam ?>
                    </div>
                    <div class='acara__lokasi mt-2'>
                        <?php echo $acara1_lokasi ?>
                    </div>
                </div>
                <div class='acara__resepsi pure-u-1 pure-u-md-1/2' data-aos='fade-right'>
                    <div class='acara__judul'>
                        <?php echo $acara2_judul; ?>
                    </div>
                    <div class='acara__hari mt-2'>
                        <?php echo $acara2_hari ?>
                    </div>
                    <div class='acara__tanggal mt-2'>
                        <?php echo $acara2_tanggal ?>
                    </div>
                    <div class='acara__jam mt-2'>
                        <?php echo $acara2_jam ?>
                    </div>
                    <div class='acara__lokasi mt-2'>
                        <?php echo $acara2_lokasi ?>
                    </div>

                </div>
            </div>
        </section>

        <!-- Section Countdown -->
        <?php
        if ($is_enabled_countdown == true) {
            ?>
            <section id='countdown'>
                <div class='countdown__container'>
                    <div class="countdown__savethedate" data-aos='zoom-in'> <img src='<?php echo $savethedate; ?>'></img>
                    </div>
                    <div class='countdown__judul judul' data-aos='fade-down'>
                        <?php echo $judul_countdown; ?>
                    </div>
                    <div class='pure-g countdown__timer'>
                        <div class='countdown__card pure-u-3-8' data-aos='fade-right'>
                            <div class='hari count'>100</div>
                            <div class='label'>Hari</div>
                        </div>
                        <div class='countdown__card pure-u-3-8' data-aos='fade-left'>
                            <div class='jam count'>23</div>
                            <div class='label'>Jam</div>
                        </div>
                        <div class='countdown__card pure-u-3-8' data-aos='fade-right'>
                            <div class='menit count'>34</div>
                            <div class='label'>Menit</div>
                        </div>
                        <div class='countdown__card pure-u-3-8' data-aos='fade-left'>
                            <div class='detik count'>23</div>
                            <div class='label'>Detik</div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Section Lokasi -->
        <?php if ($is_enabled_lokasi == true) { ?>
            <section id='lokasi' class='mb-2'>
                <div class='lokasi__judul judul' data-aos='fade-down'>
                    <?php echo $judul_lokasi ?>
                </div>
                <div class='lokasi__iframe map-responsive' data-aos='zoom-in'>
                    <iframe src="<?php echo $maps_iframe ?>" width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class='lokasi__button mt-6 mb-6' data-aos='fade-up'>
                    <a class='button' href='<?php echo $maps_link ?>'>Buka Google Maps</a>
                </div>

            </section>
        <?php } ?>

        <!-- Section Galeri -->
        <?php if ($is_enabled_galeri == true) { ?>
            <section id='galeri' class='mt-20'>
                <div class='galeri__judul judul mb-8' data-aos="fade-down">
                    <?php echo $judul_galeri ?>
                </div>
                <?php foreach ($photo_array as $foto) {
                    if (!empty($foto)) { ?>
                        <div class='galeri__frame' data-aos='zoom-in'>
                            <img src='<?php echo $foto ?>'>
                        </div>
                    <?php } ?>
                <?php } ?>
            </section>

        <?php } ?>

        <!-- Section Ucapan -->
        <section id='ucapan'>
            <div class='ucapan__judul judul mb-8' data-aos="fade-down">
                <?php echo $judul_ucapan ?>
            </div>
            <div class='ucapan__narasi narasi mb-8' data-aos="fade-down">
                <?php echo $narasi_ucapan ?>
            </div>
            <div class='ucapan__form mb-8' data-aos='zoom-in'>
                <div>
                    <input id='ucapan__input__title' placeholder='Nama'>
                    <textarea id='ucapan__input__content' rows='3' placeholder='Ucapan'></textarea>
                    <button class='kirim-ucapan mt-4'>Kirim</button>
                </div>
            </div>
            <div class='ucapan__list'></div>

        </section>
        <!-- Section Footer -->
        <section id='footer'>
            Powered by <a href='https://invait.id'>Invait</a>
        </section>
    </div>
</div>