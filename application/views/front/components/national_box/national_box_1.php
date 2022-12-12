
    <div class="row">

        <div class="col-sm-5">
            <div class="img-box">
                <?php 
                    $img = json_decode($img_features,true);
                    foreach($img as $row){
                        if($row['index'] == 0){
                ?>
                    <img alt="<?php echo word_limiter($title,20);?>" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$news_id,'','','thumb','src','multi','one');?>" class="img-thumbnail img-responsive image_delay">
                <?php }}?>
            </div>
        </div>

        <div class="col-sm-7">
            <div class="paddingTop10 paddingRight10">
                <h3 style="font-size:1.1em;">
                    <a class="pt-3" href="<?php echo base_url();?>home/news_description/<?php echo $news_id ;?>"> <?php echo word_limiter($title,20);?> </a>
                </h3>
            </div>
        </div>

    </div>

