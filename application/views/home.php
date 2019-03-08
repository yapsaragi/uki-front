
    <div id="main-slider">

        <div id="carousel-example" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
<?php foreach ($slideshow as $k => $v) : ?>
                <div class="item <?php echo $k === 0 ? 'active' : ''; ?>">
                    <a target="_blank" href="<?php echo $v -> surl; ?>"><img src="<?php echo __get_upload_file($v -> sfile, 3); ?>" alt="" /></a>
                    <div class="carousel-caption">
                        <h4 class="back-light"><?php echo $v -> stitle; ?>
                        </h4>
                    </div>
                </div>
<?php endforeach; ?>
            </div>
            <!--INDICATORS-->
            <ol class="carousel-indicators">
<?php foreach ($slideshow as $k => $v) : ?>
                <li data-target="#carousel-example" data-slide-to="<?php echo $k; ?>" class="<?php echo $k === 0 ? 'active' : ''; ?>"></li>
<?php endforeach; ?>
            </ol>
            <!--PREVIUS-NEXT BUTTONS-->
            <a class="left carousel-control" href="uki1.php.html#carousel-example" data-slide="prev">
                <i class="fa fa-angle-left fa-3x control-icon clr-main"></i>
            </a>
            <a class="right carousel-control" href="uki1.php.html#carousel-example" data-slide="next">
                <i class="fa fa-angle-right fa-3x control-icon clr-main"></i>
            </a>
        </div>

    </div>
    <!--./ Main Slider End -->
    <?php if (count($announcement) > 0) : ?>
        <section id="home-service" style="margin-top:20px;">
            <div class="container announcement">
                <div class="row ">
                    <div class="col-lg-12 col-md-12  col-sm-12" >
                        <i class="fa fa-bullhorn  fa-5x icon-round faa-horizontal animated"></i>
                        <h4><strong>Pengumuman </strong></h4>
                        <?php foreach($announcement as $k => $v) : ?>
                            <?php echo $v -> pcontent; ?>
                        <?php endforeach;?>
                    </div>

                </div>

            </div>
        </section>
    <?php endif; ?>
    <!--./ Home Service End -->
    <section id="news-updated">
        <div class="container">
            <div class="row pad-top-botm">
                <div class="col-lg-6 col-md-6">
                    <h2>Berita Terkini </h2>
                    <?php foreach($newsupdate as $k => $v) : ?>
                        <div class="col-lg-4 col-md-4 news-updated-three">
                        <img src="<?php echo __get_image_url($v -> pcontent); ?>" alt="<?php echo $v -> ptitle; ?>" title="<?php echo $v -> ptitle; ?>">
                        <div class="block-home-title">
                        <p class="newsupdate-title">
                            <?php echo $v -> ptitle; ?>
                        </p>
                        </div>
                        <p class="newsupdate-date">last updated <?php echo __get_date($v -> pdate, 1); ?></p>
                        <div class="block-home-posts">
                        <p style="text-align: justify;">
                            <?php echo __limit_word($v -> pcontent, 15); ?>
                        </p>
                        </div>
                    <button class="btn btn-primary" title="<?php echo $v -> ptitle; ?>" type="button" onclick="window.location.href='<?php echo base_url('post/' . $v -> pid); ?>'">
                        Read Full Details <span class="badge">+</span>
                    </button>
                    <br />
                    <br />
                </div>
                <?php endforeach; ?>
                </div>

                <div class="col-lg-6 col-md-6">
                    <h2>Events </h2>
                    <?php foreach($lastevents as $k => $v) : ?>
                    <div class="col-lg-12 event-item">
                        <div class="col-lg-2 col-md-2" style="padding-left: 0">
                        <div class="thumb-calendar-event"><div class="thumb-calendar-short-date"><p class="thumb-month"><?php echo date('M', strtotime($v -> edatefrom));?> '<?php echo date('y', strtotime($v -> edatefrom));?></p><p class="thumb-date"><?php echo date('d', strtotime($v -> edatefrom));?></p></div></div>
                        </div>
                        <div class="col-lg-10 event-title">
                            <a href="<?php echo base_url('event/' . $v -> eid); ?>" title="<?php echo $v -> etitle; ?>"><?php echo $v -> etitle; ?></a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <!--./ vedio-sec End -->
    <!--./ Service info Section End -->
    <div class="just-stats">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6 ">
                    <div class="stats-div">
                        <i class="fa fa-rocket fa-5x icon-round faa-horizontal animated"></i>
                        <h3>Visi</h3>
                        <p>Fakultas Sastra Universitas Kristen Indonesia (FS UKI) bervisi menjadi fakultas yang unggul dan bereputasi dalam dunia pendidikan, penelitian, dan pengabdian kepada masyarakat khususnya dalam bidang bahasa, sastra, dan budaya yang antisipatif terhadap perubahan di era globalisasi yang berjiwa Pancasila berdasarkan nilai-nilai kristiani.</p>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 ">
                    <div class="stats-div">
                        <i class="fa fa-globe fa-5x icon-round faa-horizontal animated"></i>
                        <h3>Misi</h3>
                        <p>Fakultas Sastra Universitas Kristen Indonesia (FS UKI) memiliki misi mengembangkan pendidikan Sastra Inggris dan disiplin ilmu yang berkaitan dengan program studi tersebut.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--./ stats div end -->
      <div id="media-sec">
        <div class="container">

            <div class="row testimonial">
                <div class="col-lg-8 col-md-8" >
                    <div class="text-center">
                        <h3>KATA MEREKA, TENTANG UKI</h3>
                        <br />
                        <br />
                    </div>
                    <?php foreach($testimonial as $k => $v) : ?>
                    <div class="col-lg-6 col-md-6">
                        <blockquote>
                            <p><?php echo $v -> ttestimony; ?></p>
                        <div class="col-lg-4 testimonial-photo">
                            <img src="<?php echo __get_upload_file($v -> tphoto, 4); ?>">
                        </div>
                        <div class="col-lg-8 testimonial-name">
                            <p><?php echo $v -> tname; ?></p>
                            <p><b><?php echo $v -> tcompany; ?></b></p>
                        </div>
                        </blockquote>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-4 col-md-4" >
                    <div class="text-center">
                        <h3>TWEETS TERKINI</h3>
                        <br />
                        <br />
                    </div>
                <div class="col-lg-12 col-md-12">
                <div class="twitter" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="200" data-aos-once="true">
                    <a class="twitter-timeline" data-link-color="#ff6a00" data-cards="hidden" data-theme="dark" data-tweet-limit="3" data-chrome="noheader nofooter noborders transparent" href="https://twitter.com/Kampus_UKI">Tweets by Kampus_UKI</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                </div>

                </div>
            </div>

        </div>

    </div>
    <!--./ Media Section End -->
