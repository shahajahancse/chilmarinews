<?php
    $this->db->limit(5);
    $this->db->select('news_category.name as cat_name,news.*');
    $this->db->from('news_category');
    $this->db->where('news.news_category_id = news_category.news_category_id');

    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where_in('news.news_category_id',[4,5]);
    $this->db->where('status','published');
    $detail_news    = $this->db->get('news')->result_array();
    // dd($detail_news); 
?>
<section class="page-section pad-tb-5">
    <div class="container-fluid">
        <a href="<?php echo base_url(); ?>home/sports">
            <h3 style="margin-left:15px" class="text-dark"><b>খেলাধুলা</b></h3>
        </a>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="<?php echo $this->Crud_model->link_news($detail_news[0]['cat_name'], $detail_news[0]['news_id']);?>">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                        <img   
                              style="width:100%"
                              class="image_delay" 
                              src="<?php echo img_loading(); ?>" 
                              data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[0]['news_id'],'','','thumb','src','multi','one');?>" 
                              alt="image"
                        >
                        <h3 class="text-dark"><?php echo $detail_news[0]['title']; ?></h3>
                        <p style=""><?php echo word_limiter($detail_news[0]['summary'], 12); ?>...</p>
                    </div>
                    </a>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <?php foreach ($detail_news as $key => $row) { 
                            if ($key == 0) {} else {?>
                            <a href="<?php echo $this->Crud_model->link_news($row['cat_name'], $row['news_id']);?>">
                            <div class=" col-sm-6 col-md-6 col-lg-6" style="height:210px;margin-bottom:15px;">
                                <img  height="120px" 
                                      width="270px" 
                                      class=" col-sm-12 col-md-12 col-lg-12 image_delay" 
                                      src="<?php echo img_loading();?>" 
                                      data-src="<?php 
                                                     echo $this->Crud_model
                                                               ->file_view('news',$row['news_id'],'','','thumb','src','multi','one');
                                                ?>" 
                                      alt="image">
                                <h4 class=" col-sm-12 col-md-12 col-lg-12 text-dark"><?php echo $row['title'] ?></h4>
                            </div>
                            </a>
                        <?php } } ?>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
</section>