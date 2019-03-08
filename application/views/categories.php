    <!--./ Social Div End -->
   <div class="general-subhead">
       <h1><?php echo $name; ?></h1>
   </div>
     <!--./ Gereral Subhead End -->
    

    <section>
        <div class="container">
          <div class="row ">
            <?php foreach($data as $k => $v) : ?>
                <div class="col-lg-6 col-md-6">
                    <div class="custom-blog">
                      <h2><?php echo $v -> ptitle; ?></h2>
                        <div>
                            <ol class="breadcrumb">
                              <li><a href="<?php echo base_url('post/' . $v -> pid); ?>">Posted By : <b><?php echo $v -> uname; ?></b></a></li>
                              <li><a href="<?php echo base_url('categories/' . $v -> pcid); ?>">Posted in : <b><?php echo $v -> cname; ?></b></a></li>
                              <li><a href="<?php echo base_url('post/' . $v -> pid); ?>">On: <b><?php echo __get_date($v -> pdate, 2); ?></b></a></a></li>
                            </ol>
                        </div>
                    <img src="<?php echo __grep_image_url($v -> pcontent); ?>" class="img-rounded img-responsive " alt="<?php echo $v -> ptitle; ?>" title="<?php echo $v -> ptitle; ?>" />
                    <p><?php echo __limit_word($v -> pcontent, 50); ?></p>
                    <a class="btn btn-danger" href="<?php echo base_url('post/' . $v -> pid); ?>" title="<?php echo $v -> ptitle; ?>"> READ MORE  <span class="badge">&gt;</span> </a>
                    </div>
                    </div>
                    <?php if ($k % 2 != 0) : ?>
                    <div style="clear: both;"></div>
                  <?php endif; ?>
              <?php endforeach; ?>
        </div>
    </section>
     <!--./Blog Home End -->
    
    <!--./ Request Quote End -->
  