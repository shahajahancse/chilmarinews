<?php
    $this->db->limit(5);
    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where_in('news_category_id',[4,5]);
    $this->db->where('status','published');
    $detail_news    = $this->db->get('news')->result_array();
    // dd($detail_news); 
?>



<section class="page-section pad-tb-5">
    <div class="container-fluid">
    <h3 style="margin-left:10px">খেলাধুলা</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-6">

                    <div class="col-lg-12" >

                        <img  height="300px" width="600px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$detail_news[0]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                        <h3 style="margin-left: 11px;"><?php echo $detail_news[0]['title']; ?></h3>
                        <p style="margin-left: 11px;"><?php echo word_limiter($detail_news[0]['summary'], 12); ?>...</p>
                    </div>

                </div>
                  



                <div class="col-lg-6">
                    <div class="row">
                        <?php foreach ($detail_news as $key => $row) { 

                            if ($key == 0) {} else {?>
                            <div class="col-lg-6" style="height: 182px;">
                                <!-- <img height="120px" width="270px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->

                                <img  height="120px" width="270px" class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$row['news_id'],'','','thumb','src','multi','one');?>" alt="image">


                                <h4><?php echo $row['title'] ?></h4>
                            </div>
                        <?php } } ?>
                    </div>

                   
                </div>
            </div>
       

            </div>
        </div>
    </div>
</section>