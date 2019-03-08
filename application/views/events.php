    <!--./ Social Div End -->
   <div class="general-subhead">
       <h1>Events</h1>
   </div>
     <!--./ Gereral Subhead End -->
    

    <section>
        <div class="container">
          <div class="row ">
            <?php foreach($data as $k => $v) : ?>
                <div class="col-lg-6 col-md-6">
                    <div class="custom-blog">
                      <h2><?php echo $v -> etitle; ?></h2>
                        <div>
                            <ol class="breadcrumb">
                              <li><a href="<?php echo base_url('event/' . $v -> eid); ?>">Posted By : <b><?php echo $v -> uname; ?></b></a></li>
                              <li><a href="<?php echo base_url('event/' . $v -> eid); ?>">On: <b><?php echo __get_date($v -> edatefrom, 2); ?></b></a></a></li>
                            </ol>
                        </div>
                    <img src="<?php echo __get_upload_file($v -> ecover, 5); ?>" class="img-rounded img-responsive " alt="<?php echo $v -> etitle; ?>" title="<?php echo $v -> etitle; ?>" />
                    <p><?php echo __limit_word($v -> econtent, 50); ?></p>
                    <a class="btn btn-danger" href="<?php echo base_url('event/' . $v -> eid); ?>" title="<?php echo $v -> etitle; ?>"> READ MORE  <span class="badge">&gt;</span> </a>
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
  