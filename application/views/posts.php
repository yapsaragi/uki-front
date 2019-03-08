<div style="clear: both;"></div>
    <section>
        <div class="container">
            <div class="row ">
              <div class="blog-single">
                <h2><?php echo $data[0] -> ptitle; ?></h2><div>
                            <ol class="breadcrumb">
  <li><a href="<?php echo base_url('post/' . $data[0] -> pid); ?>">Posted By : <b><?php echo $data[0] -> uname; ?></b></a></li>
  <li><a href="<?php echo base_url('categories/' . $data[0] -> pcid); ?>">Posted in : <b><?php echo $data[0] -> cname; ?></b></a></li>
  <li><a href="<?php echo base_url('post/' . $data[0] -> pid); ?>">On: <b><?php echo __get_date($data[0] -> pdate, 2); ?></b></a></li>
</ol>
                        </div>
                <?php echo $data[0] -> pcontent; ?>
              </div>
              <div class="share-social">
              <h3>Share Via</h3>
              <a href="https://www.facebook.com/sharer.php?u=<?php echo base_url($_SERVER['REQUEST_URI']); ?>"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/intent/tweet?url=<?php echo base_url($_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($data[0] -> ptitle); ?>"><i class="fa fa-twitter"></i></a>
              <a href="mailto:?subject=<?php echo $data[0] -> ptitle; ?>&body=Check out this site <?php echo base_url($_SERVER['REQUEST_URI']); ?>"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
           </div>
    </section>
    <!--./ Request Quote End -->
  