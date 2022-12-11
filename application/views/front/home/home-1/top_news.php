<?php
    $this->db->limit(14);
    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('news_speciality_id',3);
    $this->db->where('status','published');
    $top_news	= $this->db->get('news')->result_array();
    // dd($top_news[0]);
?>
<section class="page-section pad-tb-5">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <!-- top news -->
                    <div class="col-lg-9">
                        <div class="col-lg-8" >

                            <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[0]['news_id'],'','','thumb','src','multi','one');?>" alt="<?php echo $top_news[0]['title']; ?>">

                            <p> <!-- image description here --> </p>
                        </div>

                        <div class="col-lg-4" > 
                            <div class="row">
                                <h3 ><?php echo $top_news[0]['title']; ?></h3>
                            </div>
                            <div class="row">
                                <p><?php echo word_limiter($top_news[0]['summary'],20); ?>...</p>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-lg-3">
                        <div class="col-lg-12">

                            <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[1]['news_id'],'','','thumb','src','multi','one');?>" alt="<?php echo $top_news[1]['title']; ?>">

                            <h4><?php echo $top_news[1]['title']; ?></h4>
                        </div>
                    </div>
                </div>
                 <!--after top news content  -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[2]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[2]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[2]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[3]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[3]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[3]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[4]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[4]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[4]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[5]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[5]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[5]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[6]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[6]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[6]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[7]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[7]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[7]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[8]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[8]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[8]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[9]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[9]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[9]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[10]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[10]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[10]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[11]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[11]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[11]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[12]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[12]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[12]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="text-dark"><?php echo word_limiter($top_news[13]['title'],7); ?>...</h4>
                            </div>
                            <div class="col-lg-4">
                                <img style="width: 100% !important" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[13]['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($top_news[13]['summary'],10); ?>...</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- right side column  -->

            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12">
                        <img style="margin-left: 20px;"  height="130px" width="260px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <img style="margin-left: 20px; margin-top:10px;margin-bottom:10px"  height="130px" width="260px" src="https://cdn.pixabay.com/photo/2015/04/19/08/32/rose-729509__340.jpg">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <img style="margin-left: 20px;"  height="130px" width="260px" src="https://cdn.pixabay.com/photo/2018/05/17/09/18/away-3408119__340.jpg">
                    </div>
                </div>

            </div>

        </div>

    </div>


</section>