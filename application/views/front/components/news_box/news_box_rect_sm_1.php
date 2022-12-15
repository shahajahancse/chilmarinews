<div style="margin-top:0px;margin-bottom:10px;">

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="media">
                <span class="media-link">
                    <?php 
                        $img = json_decode($img_features,true);
                        foreach($img as $row){
                            if($row['index'] == 0){
                    ?>
                        <img class=" img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" alt=""/>
                    <?php }}?>
                </span> 
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6  pad-l-0 ">
            <div class="caption down">
                <h4 class="row caption-title">
                    <a  href="<?php echo $this->Crud_model->news_link($news_id);?>">
                       <p class="row " style="margin-left: 14px;line-height: 1.5;"> <?php echo word_limiter($title,10);?></p>
                    </a>
                </h4>
                <div class=" hidden-sm hidden-xs caption-text">
                   <p style="margin-left: 14px;"> <?php echo word_limiter($summary,15);?></p>
                </div>
            </div>
        </div>

    </div>
    <hr class="hidden-sm hidden-xs" style="border-top: 1px solid #cbcbcb;">
</div>