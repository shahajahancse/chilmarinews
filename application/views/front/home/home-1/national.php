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
            <h3 style="margin-left:10px">জাতীয়</h3>
        </a>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    
                    <?php if(isset($detail_news[0])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[0]['cat_name']).'/'.base64_encode($detail_news[0]['news_id']));?>">

                        <div class="col-lg-4">
                            <img  height="150px" width="380px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[0]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4><?php echo $detail_news[0]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                        <!-- <div class="col-lg-4">
                            <img height="150px" width="380px" src="https://cdn.jagonews24.com/media/imgAllNew/SM/2019November/ea-1-20221210174027.jpg">
                            <h4>ঢাকায় পুলিশের পাশাপাশি তৎপর আনসার</h4>
                        </div>  -->

                    <?php if(isset($detail_news[1])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[1]['cat_name']).'/'.base64_encode($detail_news[1]['news_id']));?>">

                        <div class="col-lg-4">
                            <img  height="150px" width="380px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[1]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4><?php echo $detail_news[1]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[2])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[2]['cat_name']).'/'.base64_encode($detail_news[2]['news_id']));?>">

                        <div class="col-lg-4">
                            <img  height="150px" width="380px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[2]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4><?php echo $detail_news[2]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                </div>


                <div class="row">
                    <?php if(isset($detail_news[3])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[3]['cat_name']).'/'.base64_encode($detail_news[3]['news_id']));?>">

                        <div class="col-lg-3">
                            <img  height="120px" width="270px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[3]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4><?php echo $detail_news[3]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[4])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[4]['cat_name']).'/'.base64_encode($detail_news[4]['news_id']));?>">

                        <div class="col-lg-3">
                            <img  height="120px" width="270px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[4]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4><?php echo $detail_news[4]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[5])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[5]['cat_name']).'/'.base64_encode($detail_news[5]['news_id']));?>">

                        <div class="col-lg-3">
                            <img  height="120px" width="270px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[5]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4><?php echo $detail_news[5]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <?php if(isset($detail_news[6])){ ?>    
                    <a href="<?php echo base_url('home/detail_news/'.url_title($detail_news[6]['cat_name']).'/'.base64_encode($detail_news[6]['news_id']));?>">

                        <div class="col-lg-3">
                            <img  height="120px" width="270px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[6]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                            <h4><?php echo $detail_news[6]['title']; ?></h4>
                        </div>
                    </a>
                    <?php } ?>

                    <!-- <div class="col-lg-3">
                        <img height="120px" width="270px" src="https://cdn.jagonews24.com/media/imgAllNew/SM/2019November/dmp--20221210164315.jpg">
                        <h4>সমাবেশ শেষের অপেক্ষায় সর্বোচ্চ সতর্ক অবস্থানে ৩২ হাজার ফোর্স</h4>
                    </div> -->

                </div>



            </div>
        </div>
    </div>
</section>