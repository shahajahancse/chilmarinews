<?php 
	$img = json_decode($img_features,true);
	foreach($img as $row){
		if($row['index'] == 0){
			$image_link = $this->Crud_model->file_view('news',$news_id,'','','no','src','multi','one');
		}
	}
?>

        <div 
            class="thumbnail news_box_sqr_2 image_delay"  
            data-src="<?php echo $image_link; ?>" 
            style="background-image:url('<?php echo img_loading(); ?>');height:150px;width:300px;">
        </div>
		<!-- <p class="col" style="font-size:16px">
			<a  href="< ?php echo $this->Crud_model->news_link($news_id);?>">< ?php echo word_limiter($title,10);?></a>
		</p> -->

    </div>

