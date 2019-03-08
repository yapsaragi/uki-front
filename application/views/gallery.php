<?php
foreach ($category as $k => $v) {
?>
<h2><?php echo $v -> cname; ?></h2>
<div class="clear"></div>
<?php
$CI =& get_instance();
$data = $CI -> Gallery_model -> __get_gallery($CI -> config -> config['faculty'], $v -> cid);
foreach($data as $k1 => $v1) :
?>
<div class="col-lg-3 col-md-3 col-sm-3 ">
    <div class="portfolio-item">
        <img src="<?php echo base_url(); ?>assets/img/portfolio/9.jpg" class="img-responsive " alt="" />
             <h5 >PROJECT TITLE HERE</h5>
        <div class="overlay">
            <a class="preview btn btn-success " title="Image Title Here" href="assets/img/portfolio/9.jpg">VIEW PROJECT</a>
            <p>
               Image Orinagal Size: 750x500
                <br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            </p>
            <a class="preview"  href="assets/img/portfolio/9.jpg" >
                <i class="fa fa-microphone fa-5x"></i>
                See Project Details</a>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php } ?>