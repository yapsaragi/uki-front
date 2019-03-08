    <!--./ Social Div End -->
   <div class="general-subhead">
       <h1><?php echo $data[0] -> etitle; ?></h1>
   </div>
     <!--./ Gereral Subhead End -->
    
    <section >
        <div class="container events-detail">
            <div class="row">
                <img src="<?php echo __get_upload_file($data[0] -> ecover, 5); ?>">
            </div>
            <div class="row ">
<b><i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($data[0] -> edatefrom)); ?> - <?php echo date('H:i', strtotime($data[0] -> edateto)); ?></b>
 <br />
<b><i class="fa fa-calendar-o"></i> <?php echo date('d M Y', strtotime($data[0] -> edateto)); ?></b>
 <br />
<b><i class="fa fa-map-marker"></i> <?php echo $data[0] -> elocation; ?></b>
 <br />
 <br />

                <?php echo $data[0] -> econtent; ?>
            </div>
           </div>
    </section>
    <!--./ Request Quote End -->
  