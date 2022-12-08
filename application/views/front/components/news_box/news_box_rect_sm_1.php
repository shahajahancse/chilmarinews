<div style="margin-top:0px;margin-bottom:15px;">

    <div class="row">
        <div class="col-md-4">
            <div class="media">
                <span class="media-link">
                    <?php 
                        $img = json_decode($img_features,true);
                        foreach($img as $row){
                            if($row['index'] == 0){
                    ?>
                        <img class="img-thumbnail img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" alt=""/>
                    <?php }}?>
                </span> 
            </div>
        </div>

        <div class="col-md-8 pad-l-0 hidden-sm hidden-xs">
            <div class="caption down">
                <h4 class="caption-title">
                    <a href="<?php echo $this->Crud_model->news_link($news_id);?>">
                        <?php echo word_limiter($title,10);?>
                    </a>
                </h4>
                <div class="caption-text">
                    <?php echo word_limiter($summary,15);?>
                </div>
            </div>
        </div>

    </div>
    <hr style="border-top: 1px solid #cbcbcb;">
</div>