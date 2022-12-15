<?php
    $this->db->limit(7);
    $this->db->select('news_category.name as cat_name,news.*');
    $this->db->from('news_category');
    $this->db->where('news.news_category_id = news_category.news_category_id');
    $this->db->where('news.news_category_id',10);

    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('status','published');
    $detail_news    = $this->db->get('news')->result_array();
    // dd(count($detail_news)); 
?>


<section class="page-section pad-tb-5">
    <div class="container-fluid">
        <a href="<?php echo base_url(); ?>home/national">
            <h3 style="margin-left:15px" class="text-dark"><b>জাতীয়</b></h3>
        </a>
        <div class="row" style="margin-left: 0px;">
            <div class="col-lg-12">
                <div class="row">
                    
                    <?php if(isset($detail_news[0])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[0]['cat_name']).'/'.base64_encode($detail_news[0]['news_id']));?>">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                            <img style="height:180px ;width:100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[0]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4 class="text-dark"><?php echo $detail_news[0]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>


                    <?php if(isset($detail_news[1])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[1]['cat_name']).'/'.base64_encode($detail_news[1]['news_id']));?>">

                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ">
                            <img  style="height:180px ;width:100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[1]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4 class="text-dark"><?php echo $detail_news[1]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[2])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[2]['cat_name']).'/'.base64_encode($detail_news[2]['news_id']));?>">

                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ">
                            <img  style="height:180px ;width:100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[2]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4 class="text-dark"><?php echo $detail_news[2]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                </div>


                <div class="row">
                    <?php if(isset($detail_news[3])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[3]['cat_name']).'/'.base64_encode($detail_news[3]['news_id']));?>">

                        <div class="col-xs-6 col-lg-3">
                            <img style=" height:150px ;width:100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[3]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4 class="text-dark" style="text-align:left"><?php echo $detail_news[3]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[4])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[4]['cat_name']).'/'.base64_encode($detail_news[4]['news_id']));?>">

                        <div class="col-xs-6 col-lg-3">
                            <img  style=" height:150px ;width:100% !important" class="img-responsive image_delay"  src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[4]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4 class="text-dark" style="text-align:left"><?php echo $detail_news[4]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[5])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[5]['cat_name']).'/'.base64_encode($detail_news[5]['news_id']));?>">

                        <div class="col-xs-6 col-lg-3">
                            <img  style=" height:150px ;width:100% !important" class="img-responsive image_delay"  src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[5]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4 class="text-dark" style="text-align:left"><?php echo $detail_news[5]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[6])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[6]['cat_name']).'/'.base64_encode($detail_news[6]['news_id']));?>">

                        <div class="col-xs-6 col-lg-3">
                            <img  style=" height:150px ;width:100% !important" class="img-responsive image_delay"  src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[6]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4 class="text-dark" style="text-align:left"><?php echo $detail_news[6]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>


                </div>



            </div>
        </div>
    </div>
</section>