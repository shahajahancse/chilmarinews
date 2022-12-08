<?php 
	$img = json_decode($img_features,true);
	foreach($img as $row){
		if($row['index'] == 0){
			$image_link = $this->Crud_model->file_view('news',$news_id,'','','no','src','multi','one');
		}
	}
?>
<!-- first row of latest news -->
<div class="row" >
    
    <div class="col-lg-6 ">
        <div 
            class="thumbnail news_box_sqr_2 image_delay"  
            data-src="<?php echo $image_link; ?>" 
            style="margin-left:8px;background-image:url('<?php echo img_loading(); ?>');height:200px;width:400px;border-bottom:1px solid">
        </div>

    </div>
    

    <div class="col-lg-3">
        <div class="caption">
                <h4 class="caption-title" style="margin-left:-35px;font-size: 24px;font-weight: 300;line-height: 28px;">
                    <a href="<?php echo $this->Crud_model->news_link($news_id);?>">
                        <?php echo word_limiter($title,10);?>
                    </a>
                </h4>
                <!-- <div class="media-meta"> -->
                    <!-- <a href="< ?php echo $this->Crud_model->reporter_link($news_reporter_id);?>">
                        <i class="fa fa-user"></i>
                        < ?php echo $this->Crud_model->get_type_name_by_id('news_reporter',$news_reporter_id);?>
                    </a> -->
                    <!-- <span class="divider">|</span> -->
                    <!-- <a href="< ?php echo base_url(); ?>home/news/0/0/< ?php echo date("Y-m-d",$date);?>/< ?php echo date("Y-m-d",$date);?>"><i class="fa fa-clock-o"></i><?php echo date("F j, Y",$date);?></a> -->
                    <!-- <span class="divider">|</span> -->
                    <!-- <span class="read_later" onclick="to_readlater(< ?php echo $news_id; ?>,event)" data-toggle="tooltip" title="<?php echo translate('read_later'); ?>" data-placement="bottom">
                        <i class="fa fa-bookmark"></i>
                    </span> -->
                <!-- </div> -->
        </div>
     
    </div>

    <div class="col-lg-3">
        <div 
            class="thumbnail news_box_sqr_2 image_delay"  
            data-src="<?php echo $image_link; ?>" 
            style="background-image:url('<?php echo img_loading(); ?>');height:100px">
        </div>
        <div class="caption m-0 p-0">
                <h5 class="caption-title" style="margin-left: -10px;font-size:16px;margin-top:5px" >
                    <a href="<?php echo $this->Crud_model->news_link($news_id);?>">
                        <?php echo word_limiter($title,10);?>
                    </a>
                </h5>
                <!-- <div class="media-meta"> -->
                    <!-- <a href="< ?php echo $this->Crud_model->reporter_link($news_reporter_id);?>">
                        <i class="fa fa-user"></i>
                        < ?php echo $this->Crud_model->get_type_name_by_id('news_reporter',$news_reporter_id);?>
                    </a> -->
                    <!-- <span class="divider">|</span> -->
                    <!-- <a href="< ?php echo base_url(); ?>home/news/0/0/< ?php echo date("Y-m-d",$date);?>/< ?php echo date("Y-m-d",$date);?>"><i class="fa fa-clock-o"></i><?php echo date("F j, Y",$date);?></a> -->
                    <!-- <span class="divider">|</span> -->
                    <!-- <span class="read_later" onclick="to_readlater(< ?php echo $news_id; ?>,event)" data-toggle="tooltip" title="<?php echo translate('read_later'); ?>" data-placement="bottom">
                        <i class="fa fa-bookmark"></i>
                    </span> -->
                <!-- </div> -->
        </div>
    </div>


</div>

<hr style="margin-left: 7px;border-top:1px solid #cbcbcb">
<!-- second row  of latest news-->

<div class="row" style="margin-top:50px;display:inline">

    <div class="col-lg-4" style="margin-left: -7px;padding: 0px 0px;">
        <div class="caption col-lg-5" >
            <h4 class="caption-title" style="font-size: 16px;">
                <!-- <a href="< ?php echo $this->Crud_model->news_link($news_id);?>">
                    < ?php echo word_limiter($title,10);?>

                </a> -->
                নয়াপল্টনে বিএনপির ৮ নেতাসহ তিন শতাধিক গ্রেফতার, মামলার প্রস্তুতি
            </h4>
        </div>
        <div 
            class="thumbnail news_box_sqr_2 image_delay col-lg-7"  
            data-src="<?php echo $image_link; ?>" 
            style="background-image:url('<?php echo img_loading(); ?>');height:80px;width:120px;margin-left: 15px;margin-right: 5px;">
        </div>
        <div class="caption col-lg-12" style="clear:both;margin-top:20px">
            <p class="justify-content">
                <!-- <a href="< ?php echo $this->Crud_model->news_link($news_id);?>">
                    < ?php echo word_limiter($title,10);?>
                </a> -->
                রাজধানীর নয়াপল্টনে বিএনপির কেন্দ্রীয় কার্যালয়ের সামনে দলটির নেতাকর্মীদের সঙ্গে...
            </p>
            <hr style="border-top: 1px solid #cbcbcb;">
        </div>
    </div>

    
    <div class="col-lg-4" style="margin-left: -7px;padding: 0px 0px;">
        <div class="caption col-lg-5" >
            <h4 class="caption-title" style="font-size: 16px;">
                <!-- <a href="< ?php echo $this->Crud_model->news_link($news_id);?>">
                    < ?php echo word_limiter($title,10);?>

                </a> -->
                নয়াপল্টনে বিএনপির ৮ নেতাসহ তিন শতাধিক গ্রেফতার, মামলার প্রস্তুতি
            </h4>
        </div>
        <div 
            class="thumbnail news_box_sqr_2 image_delay col-lg-7"  
            data-src="<?php echo $image_link; ?>" 
            style="background-image:url('<?php echo img_loading(); ?>');height:80px;width:120px;margin-left: 15px;margin-right: 5px;">
        </div>
        <div class="caption col-lg-12" style="clear:both;margin-top:20px">
            <p class="justify-content">
                <!-- <a href="< ?php echo $this->Crud_model->news_link($news_id);?>">
                    < ?php echo word_limiter($title,10);?>
                </a> -->
                রাজধানীর নয়াপল্টনে বিএনপির কেন্দ্রীয় কার্যালয়ের সামনে দলটির নেতাকর্মীদের সঙ্গে...
            </p>
            <hr style="border-top: 1px solid #cbcbcb;">
        </div>
    </div>


    
    <div class="col-lg-4" style="margin-left: -7px;padding: 0px 0px;">
        <div class="caption col-lg-5" >
            <h4 class="caption-title" style="font-size: 16px;">
                <!-- <a href="< ?php echo $this->Crud_model->news_link($news_id);?>">
                    < ?php echo word_limiter($title,10);?>

                </a> -->
                নয়াপল্টনে বিএনপির ৮ নেতাসহ তিন শতাধিক গ্রেফতার, মামলার প্রস্তুতি
            </h4>
        </div>
        <div 
            class="thumbnail news_box_sqr_2 image_delay col-lg-7"  
            data-src="<?php echo $image_link; ?>" 
            style="background-image:url('<?php echo img_loading(); ?>');height:80px;width:120px;margin-left: 15px;margin-right: 5px;">
        </div>
        <div class="caption col-lg-12" style="clear:both;margin-top:20px">
            <p class="justify-content">
                <!-- <a href="< ?php echo $this->Crud_model->news_link($news_id);?>">
                    < ?php echo word_limiter($title,10);?>
                </a> -->
                রাজধানীর নয়াপল্টনে বিএনপির কেন্দ্রীয় কার্যালয়ের সামনে দলটির নেতাকর্মীদের সঙ্গে...
            </p>
            <hr style="border-top: 1px solid #cbcbcb;">
        </div>
    </div>
</div>





