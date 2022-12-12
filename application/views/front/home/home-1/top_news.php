<?php
    $this->db->limit(11);
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
            <div class="col-md-12 col-lg-9">
                <div class="row">
                    <!-- top news -->
                    <div class="col-sm-6 col-md-8 col-lg-9 ">
                        <div class="col-md-8 col-lg-8" >
                            <img style="width: 100% !important;height:200px" class="img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$top_news[0]['news_id'],'','','thumb','src','multi','one');?>" alt="<?php echo $top_news[0]['title']; ?>">
                            <p> <!-- image description here --> </p>
                        </div>

                        <div class="col-md-4 col-lg-4" > 
                            <div class="row">
                                <h3 class="text-dark col-xs-12" style="margin: 0px;line-height: 1.4;"><?php echo $top_news[0]['title']; ?></h3>
                            </div>
                            <div class="row">
                                <p class="col-xs-12" style="text-align: justify;"><?php echo word_limiter($top_news[0]['summary'],20); ?>...</p>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-sm-6  col-md-4 col-lg-3">
                        <div class="col-lg-12 col-md-12">
                            <img style="width: 100% !important" 
                                 class="img-responsive image_delay" 
                                 src="<?php echo img_loading(); ?>"
                                 data-src="<?php echo $this->Crud_model->file_view('news',$top_news[1]['news_id'],'','','thumb','src','multi','one');?>" alt="<?php echo $top_news[1]['title']; ?>">
                            <h4 class="text-dark">
                                <?php echo $top_news[1]['title']; ?>
                            </h4>
                        </div>
                    </div>
                </div>


                 <!--after top news content  -->
                <div class="row">
                    <?php foreach($top_news as $key=>$row){
                        if($key==0 || $key==1){

                        }
                        else{

                    ?>
                        
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="height: 170px;">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <h4 style="margin-left: 11px" class="text-dark"><?php echo $row['title']; ?></h4>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <img class="image_delay" 
                                     style="height: 75px;
                                            width: 107px;
                                            margin-left: -20px;
                                            margin-top: 11px;
                                            margin-bottom: 10px;"
                                     src="<?php echo img_loading(); ?>" 
                                     data-src="<?php echo $this->Crud_model->file_view('news',$row['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                                <!-- <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg"> -->
                            </div>
                        
                            <div class="colxs-12 col-sm-12 col-md-12 col-lg-12">
                                <p style="margin-left:12px"><?php echo word_limiter($row['summary'],8); ?>...</p>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                </div>

            </div>

            <!-- right side column  -->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <!-- <div class="row"> -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-12">
                        <img style="margin-left: 20px;margin-bottom:10px"  height="130px" width="260px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                    </div>
                <!-- </div> -->

                <!-- <div class="row"> -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-12">
                        <img style="margin-left: 20px;margin-bottom:10px"  height="130px" width="260px" src="https://cdn.pixabay.com/photo/2015/04/19/08/32/rose-729509__340.jpg">
                    </div>
                <!-- </div> -->

                <!-- <div class="row"> -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-12">
                        <img style="margin-left: 20px;"  height="130px" width="260px" src="https://cdn.pixabay.com/photo/2018/05/17/09/18/away-3408119__340.jpg">
                    </div>
                <!-- </div> -->

            </div>

        </div>

    </div>


</section>