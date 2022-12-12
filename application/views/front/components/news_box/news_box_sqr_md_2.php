<?php 
	$img = json_decode($img_features,true);
	foreach($img as $row){
		if($row['index'] == 0){
			$image_link = $this->Crud_model->file_view('news',$news_id,'','','no','src','multi','one');
		}
	}
?>
<!-- first row of latest news -->
<!-- <div class="row" > -->
    
    <div class="col-lg-6">
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
        </div>
    </div>
<!-- </div> -->

</div>





