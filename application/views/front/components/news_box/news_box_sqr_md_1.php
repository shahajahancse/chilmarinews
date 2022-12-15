<div class=" ">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="media">
                <span class="media-link">
                    <?php 
                        $img = json_decode($img_features,true);
                        foreach($img as $row){
                            if($row['index'] == 0){
                    ?>
                        <img style="width:600px" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" alt=""/>
                    <?php }}?>
                </span> 
            </div>
        </div>
    </div>
    <div class="caption">
        <h4 class="caption-title" style="margin-top:10px">
            <a href="<?php echo $this->Crud_model->news_link($news_id);?>">
                <?php echo word_limiter($title,20);?>
            </a>
        </h4>
    </div>
</div>