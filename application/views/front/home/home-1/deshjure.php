<?php
    $this->db->limit(5);
    $this->db->select('news_category.name as cat_name,news.*');
    $this->db->from('news_category');
    $this->db->where('news.news_category_id = news_category.news_category_id');
    $this->db->where('news.news_category_id',10);

    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('status','published');
    $detail_news    = $this->db->get('news')->result_array();

    // dd($detail_news); 
?>



<section class="page-section pad-tb-5">
    <div class="container-fluid">
        <a href="<?php echo base_url(); ?>home/national">
            <h3 style="margin-left:15px" class="text-dark"><b>দেশজুড়ে</b></h3>
        </a>
        <!-- <div class="row"> -->
            <!-- <div class="col-lg-12"> -->
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-3">   
                        <?php if(isset($detail_news[1])){ ?>    
                        <a href="<?php echo $this->Crud_model->link_news($detail_news[1]['cat_name'], $detail_news[1]['news_id']);?>">
                        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                            <img  height="120px" width="200px" class="im-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[1]['news_id'],'','','thumb','src','multi','one');?>" alt="image">
                            <h4 class="text-dark"><?php echo $detail_news[1]['title']; ?></h4>
                        </div>
                        </a>
                        <?php } if(isset($detail_news[2])){ ?> 
                        <a href="<?php echo $this->Crud_model->link_news($detail_news[2]['cat_name'], $detail_news[2]['news_id']);?>">
                        <div class="col-xs-6 col-sm-6 col-md-6  col-lg-12">
                            <img  height="120px" width="200px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[2]['news_id'],'','','thumb','src','multi','one');?>" alt="image">
                            <h4 class="text-dark"><?php echo $detail_news[2]['title']; ?></h4>
                        </div>
                        </a>
                        <?php } ?>
                    </div>

                            

                    <div class="col-md-6 col-lg-6">
                        <a href="<?php echo $this->Crud_model->link_news($detail_news[0]['cat_name'], $detail_news[0]['news_id']);?>">
                        <div class="col-xs-12  col-lg-12" >
                            <img  height="300px" width="600px" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[0]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h3  class="text-dark"><?php echo $detail_news[0]['title']; ?></h3>
                            <p ><?php echo word_limiter($detail_news[0]['summary'], 20); ?>...</p>
                        </div>
                        </a>
                    </div>


                    
                    <div class="col-xs-12 col-md-6 col-lg-3">   
                        <?php if(isset($detail_news[3])){ ?>  
                        <a href="<?php echo $this->Crud_model->link_news($detail_news[3]['cat_name'], $detail_news[3]['news_id']);?>">
                        <div class="col-xs-6 col-lg-12">
                            <img  height="120px" width="200px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[3]['news_id'],'','','thumb','src','multi','one');?>" alt="image">
                            <h4 class="text-dark"><?php echo $detail_news[3]['title']; ?></h4>
                        </div> 
                        </a>  
                        <?php } if(isset($detail_news[4])){ ?> 
                        <a href="<?php echo $this->Crud_model->link_news($detail_news[4]['cat_name'], $detail_news[4]['news_id']);?>">
                        <div class="col-xs-6 col-lg-12">
                            <img  height="120px" width="200px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[4]['news_id'],'','','thumb','src','multi','one');?>" alt="image">
                            <h4 class="text-dark"><?php echo $detail_news[4]['title']; ?></h4>
                        </div> 
                        </a>
                        <?php } ?>
                    </div>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</section>