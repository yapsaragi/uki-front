<div class="clear"></div>
   
    <div id="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3" id="about-ftr">
                    <div id="blog-footer-div">
                    <i class="fa fa-building fa-2x"></i>
                    <span>SASTRA INGGRIS</span>
                    <small>Sekilas tentang Sastra Inggris</small>
                    <div>
Fakultas Sastra didirikan pada tahun 1953 sebagai wujud dari visi para pendiri Universitas Kristen Indonesia yang melihat pentingnya tenaga-tenaga kerja terampil yang mampu berkomunikasi dengan komunitas internasional yang diperlukan Negara Republik Indonesia yang pada waktu itu belum lama merdeka. Sejak didirikannya sampai sekarang.
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div id="blog-footer-div">
                    <i class="fa fa-paper-plane-o fa-2x"></i>
                    <span>From the blog</span>
                    <small>News updates about UKI Fakultas Sastra</small>
                        <?php
                        $posts = __get_last_posts();
                        foreach ($posts as $key => $value) {
                        ?>
                        <div class="media">
                            <div class="pull-left">
                                <img src="<?php echo __grep_image_url($value -> pcontent); ?>" class="img-circle" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="<?php echo base_url('post/' . $value -> pid); ?>"><?php echo $value -> ptitle; ?></a></span>
                                <small class="muted">Posted <?php echo __get_date($value -> pdate, 2); ?></small>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" id="link-fakultas">
                    <div id="blog-footer-div">
                    <i class="fa fa-link fa-2x"></i>
                    <span>WEBSITE UKI</span>
                    <small>Informasi lebih detail mengenai UKI</small>
                    <ul class="list-unstyled">
                        <li><a href="http://uki.ac.id" target="_blank">Universitas Kristen Indonesia</a></li>
                        <li><a href="http://fkip.uki.ac.id" target="_blank">Fakultas Keguruan dan Ilmu Pendidikan</a></li>
                        <li><a href="http://sastra.uki.ac.id" target="_blank">Fakultas Sastra</a></li>
                        <li><a href="http://fe.uki.ac.id" target="_blank">Fakultas Ekonomi</a></li>
                        <li><a href="http://fh.uki.ac.id" target="_blank">Fakultas Hukum</a></li>
                        <li><a href="http://fk.uki.ac.id" target="_blank">Fakultas Kedokteran</a></li>
                        <li><a href="http://ft.uki.ac.id" target="_blank">Fakultas Teknik</a></li>
                        <li><a href="http://fisipol.uki.ac.id" target="_blank">Fakultas Ilmu Sosial &amp; Politik</a></li>
                        <li><a href="http://pps.uki.ac.id" target="_blank">Program Pascasarjana</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <span>Our location</span>
                    <small>Our Zones are strategically located throughout east and central Jakarta</small>

<b>Kampus Cawang</b>
                    <br />
Jl.Mayjen Sutoyo No 2. Jakarta
                    <br />
13630 - Indonesia
                    <br />
021-8092425
                    <br />
                    <br />

<b>Kampus Diponegoro</b>
                    <br />
Jl.Diponegoro No. 84-86, Jakarta Pusat
                    <br />
10430 - Indonesia 021-3920174
                </div>
            </div>
        </div>
         </div>

    <!--./ footer-sec  End -->
    <div id="footser-end">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    &copy; <?php echo date('Y'); ?> Universitas Kristen Indonesia
                </div>
            </div>

        </div>
    </div>
    <!--./ footer-end End -->
    <!--  Jquery Core Script -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <!--  Custom Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js?1"></script>
<!-- mibew button -->
<!-- <a id="mibew-agent-button" href="<?php echo __get_livechat_url(1) ;?>index.php/chat?locale=id" target="_blank" onclick="Mibew.Objects.ChatPopups['5b8a782315eb483d'].open();return false;"><img src="<?php echo __get_livechat_url(1) ;?>index.php/b?i=mibew&amp;lang=id" border="0" alt="" /></a><script type="text/javascript" src="http://localhost:4511/js/compiled/chat_popup.js"></script><script type="text/javascript">Mibew.ChatPopup.init({"id":"5b8a782315eb483d","url":"<?php echo __get_livechat_url(2) ;?>index.php\/chat?locale=id","preferIFrame":true,"modSecurity":false,"forceSecure":false,"width":640,"height":480,"resizable":true,"styleLoader":"<?php echo __get_livechat_url(2) ;?>index.php\/chat\/style\/popup"});</script> -->
<!-- / mibew button -->
</body>
</html>
