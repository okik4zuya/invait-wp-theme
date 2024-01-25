<?php
// Define theme_image function
function theme_image($name){
    return get_theme_file_uri('assets/images/') . get_field('tema')->post_name . '/' . $name;
}
//Define fields
$cf = get_fields();
?>

<div id='main-container'>
    <?php if ($cf['fitur_audio'] == true) { ?>
        <div id='audio'>
            <audio loop='true' autoplay>
                <source src='<?php echo $cf['audio_src'] ?>' type="audio/mpeg" />
            </audio>
            <div class='audio__icon'></div>
        </div>
    <?php } ?>

    <div id='desktop-cover' class='bg-image pure-u-5-8'>
        <div class='bg-layer'></div>
        <div class='desktop-cover__content'>
            <div class='judul-cover'>
                <?php echo $cf['judul_cover']; ?>
            </div>
            <div class='mempelai'>
                <?php echo $cf['nama_1']; ?> &
                <?php echo $cf['nama_2']; ?>
            </div>
            <div class='tanggal-cover mt-8'>
                <?php echo $cf['teks_tanggal']; ?>
            </div>
            <div class='kepada-yth-wrapper p-4 mt-8'>
                <div class='kepada-yth'>Kepada Yth.</div>
                <div class='nama-tamu mt-4'>
                    <?php echo isset($_GET['to']) ? $_GET['to'] : 'Tamu Undangan' ?>
                </div>
            </div>
        </div>
    </div>

    <div id='invitation-container' class='pure-u-1 pure-u-md-3-8'>
        <!-- Background -->
        <section id='background' class='bg-image'>
        </section>
        <!-- Section Floating Cover -->
        <section id='floating-cover' class='bg-image'>
            <div class='ornament-top-left'> <img src='<?php echo theme_image('ornament-top.png'); ?>' /> </div>
            <div class='ornament-top-right'> <img src='<?php echo theme_image('ornament-top.png'); ?>' /> </div>
            <div class='ornament-bottom'> <img src='<?php echo theme_image('ornament-bottom.png'); ?>' /> </div>
            <div class='judul-cover'>
                <?php echo $cf['judul_cover']; ?>
            </div>
            <div class='mempelai mb-10'>
                <?php echo $cf['nama_1']; ?> &
                <?php echo $cf['nama_2']; ?>
            </div>
            <div class='tanggal-cover'>
                <?php echo $cf['teks_tanggal']; ?>
            </div>
            <div class='kepada-yth mt-8'>Kepada Yth.</div>
            <div class='nama-tamu mt-4'>
                    <?php echo isset($_GET['to']) ? $_GET['to'] : 'Tamu Undangan' ?>
            </div>
            <button class='open-invitation'>Buka undangan</button>
        </section>

        <!-- Section Cover -->
        <section id='cover' data-bg='#c8a051'>
            <div class='ornament-top-left'> <img src='<?php echo theme_image('ornament-top.png'); ?>' /> </div>
            <div class='ornament-top-right'> <img src='<?php echo theme_image('ornament-top.png'); ?>' /> </div>
            <div class='ornament-bottom'> <img src='<?php echo theme_image('ornament-bottom.png'); ?>' /> </div>
            <div class='judul-cover'>
                <?php echo $cf['judul_cover']; ?>
            </div>
            <div class='mempelai'>
                <?php echo $cf['nama_1']; ?> &
                <?php echo $cf['nama_2']; ?>
            </div>
            <div class='tanggal-cover mt-8'>
                <?php echo $cf['teks_tanggal']; ?>
            </div>
        </section>

        <!-- Section Pembuka-->
        <section id='pembuka'>
            <div class='narasi-pembuka' data-aos='fade-right'>
                <?php echo $cf['narasi_pembuka']; ?>
            </div>
        </section>

        <!-- Section Mempelai-->
        <section id='mempelai' class='-mt-12'>
            <div class='mempelai1' data-aos='fade-up'>
                <?php if (!empty($cf['avatar_1'])) { ?>
                    <div class='avatar1'> <img src='<?php echo $cf['avatar_1']; ?>' /> </div>
                <?php } ?>

                <div class='nama-mempelai'>
                    <?php echo $cf['nama_1_lengkap']; ?>
                </div>
                <div class='ortu-mempelai'>
                    <?php echo $cf['ortu_1']; ?>
                </div>
            </div>
            <div class='mempelai-dan mt-3 mb-2' data-aos='zoom-in'>&</div>
            <div class='mempelai2' data-aos='fade-down'>
                <?php if (!empty($cf['avatar_2'])) { ?>
                    <div class='avatar2'> <img src='<?php echo $cf['avatar_2']; ?>' /> </div>
                <?php } ?>
                <div class='nama-mempelai'>
                    <?php echo $cf['nama_2_lengkap']; ?>
                </div>
                <div class='ortu-mempelai'>
                    <?php echo $cf['ortu_2']; ?>
                </div>
            </div>
        </section>

        <!-- Section Ayat -->
        <?php
        if ($cf['fitur_ayat']== true) {
            ?>
            <section id='ayat' class='mt-2'>
                <div class='ayat__container p-6' data-aos='fade-left'>
                    <div class='ayat__konten'>
                        <?php echo $cf['ayat_konten']; ?>
                    </div>
                    <div class='ayat__sumber mt-4'>(
                        <?php echo $cf['ayat_sumber']; ?>)
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Section Acara-->
        <section id='acara'>
            <div class='acara__judul judul' data-aos='fade-down'>
                <?php echo $cf['judul_acara']; ?>
            </div>
            <div class='acara__narasi narasi' data-aos='fade-down'>
                <?php echo $cf['narasi_acara']; ?>
            </div>
            <div class='acara__container mt-4 pure-g'>
                <div class='acara__akad pure-u-1 pure-u-md-1/2' data-aos='fade-left'>
                    <div class='acara__ornament'></div>
                    <div class='acara__konten'>
                        <div class='acara__judul'>
                            <?php echo $cf['acara1_judul']; ?>
                        </div>
                        <div class='acara__hari mt-2'>
                            <?php echo $cf['acara1_hari'] ?>
                        </div>
                        <div class='acara__tanggal mt-2'>
                            <?php echo $cf['acara1_tanggal'] ?>
                        </div>
                        <div class='acara__jam mt-2'>
                            <?php echo $cf['acara1_jam'] ?>
                        </div>
                        <div class='acara__lokasi mt-2'>
                            <?php echo $cf['acara1_lokasi'] ?>
                        </div>
                    </div>
                </div>
                <div class='acara__resepsi pure-u-1 pure-u-md-1/2' data-aos='fade-right'>
                    <div class='acara__ornament'></div>
                    <div class='acara__konten'>
                        <div class='acara__judul'>
                            <?php echo $cf['acara2_judul']; ?>
                        </div>
                        <div class='acara__hari mt-2'>
                            <?php echo $cf['acara2_hari'] ?>
                        </div>
                        <div class='acara__tanggal mt-2'>
                            <?php echo $cf['acara2_tanggal'] ?>
                        </div>
                        <div class='acara__jam mt-2'>
                            <?php echo $cf['acara2_jam'] ?>
                        </div>
                        <div class='acara__lokasi mt-2'>
                            <?php echo $cf['acara2_lokasi'] ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Section Countdown -->
        <?php
        if ($cf['fitur_countdown'] == true) {
            ?>
            <section id='countdown'>
                <div class='countdown__container'>
                    <div class="countdown__savethedate" data-aos='zoom-in'> <img src='<?php echo $savethedate; ?>'></img>
                    </div>
                    <div class='countdown__judul judul' data-aos='fade-down'>
                        <?php echo $cf['judul_countdown']; ?>
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
        <?php if ($cf['fitur_lokasi'] == true) { ?>
            <section id='lokasi' class='mb-2'>
                <div class='lokasi__judul judul' data-aos='fade-down'>
                    <?php echo $cf['judul_lokasi'] ?>
                </div>
                <div class='lokasi__iframe map-responsive' data-aos='zoom-in'>
                    <iframe src="<?php echo $cf['maps_iframe'] ?>" width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class='lokasi__button mt-6 mb-6' data-aos='fade-up'>
                    <a class='button' href='<?php echo $cf['maps_link'] ?>'>Buka Google Maps</a>
                </div>

            </section>
        <?php } ?>

        <!-- Section Galeri -->
        <?php if ($cf['fitur_galeri'] == true) { ?>
            <section id='galeri' class='mt-20'>
                <div class='galeri__judul judul mb-8' data-aos="fade-down">
                    <?php echo $cf['judul_galeri'] ?>
                </div>
                <?php foreach ($cf['galeri_foto'] as $key => $foto) {
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
                <?php echo $cf['judul_ucapan'] ?>
            </div>
            <div class='ucapan__narasi narasi mb-8' data-aos="fade-down">
                <?php echo $cf['narasi_ucapan'] ?>
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
            Powered by <a href='<?php echo get_site_url(); ?>' ><img src='<?php echo get_theme_file_uri('assets/images/logo-invait.png')?>'></a>
        </section>
    </div>
</div>