<?php
    $this->db->limit(4);
    $this->db->select('news_category.name as cat_name,news.*');
    $this->db->from('news_category');
    $this->db->where('news.news_category_id = news_category.news_category_id');
    $this->db->where('news.news_category_id',15);

    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('status','published');
    $detail_news    = $this->db->get('news')->result_array();
    // dd(count($detail_news)); 
?>


<section class="page-section pad-tb-5" style="margin-top:30px">
    <div class="container-fluid">
        <!-- <h3 style="margin-left:10px">খেলাধুলা</h3> -->
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3" >
                <ul style="border: 1px solid #f9f0f0;">
                    <li class="h3 text-dark " style="padding-left:5px" style="height: 380px;">শিক্ষা</li>
                    <?php foreach ($detail_news as $key => $row) { 
                        if ($key == 0) { ?>
                            <li>
                                <a href="<?php echo $this->Crud_model->link_news($row['cat_name'], $row['news_id']);?>">
                                    <img class="img-responsive image_delay"  height="130px" width="284px" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$row['news_id'],'','','thumb','src','multi','one');?>">
                                    <h5 class="text-dark" style="padding: 5px 0px 5px 5px;"><?php echo word_limiter($row['title'],10);?></h5>
                                </a>      
                            </li> 
                        <?php } else { ?>            
                        <li style="border-top: 1px dashed #cfc8c8;border-bottom: 1px dashed #cfc8c8;padding: 5px 0px 5px 5px;">
                            <a href="<?php echo $this->Crud_model->link_news($row['cat_name'], $row['news_id']);?>">
                               <h5 class="text-dark"> <?php echo word_limiter($row['title'],10);?></h5>
                            </a>
                        </li>
                    <?php } } ?>
                </ul>
            </div>
          
 


                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="height: 380px;">
                    <ul style="border: 1px solid #f9f0f0;">
                        <li class="h3 text-dark" style="padding-left:5px">স্বাস্থ্য</li>
                        <li>
                            <img class="img-responsive"  height="130px" width="284px" src="https://cdn.jagonews24.com/media/imgAllNew/SM/2019November/corona-20221210172506.jpg">
                            <!-- <h5 class="text-dark" style="padding: 5px 0px 5px 5px;">করোনায় শনাক্ত ১৭, হার ১.২৫ শতাংশ</h5> -->
                        </li>

                        <li style="border-top: 1px dashed #cfc8c8;border-bottom: 1px dashed #cfc8c8;padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark"> ডেঙ্গুতে তিনজনের মৃত্যু, হাসপাতালে ২৬৫</h5>
                        </li>
                        <li style="padding: 5px 0px 5px 5px;border-bottom: 1px dashed #cfc8c8;">
                           <h5 class="text-dark"> হাসপাতালে ভর্তি আরও ১১৮ ডেঙ্গুরোগী</h5>
                        </li>
                        <li style="padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark"> টেস্ট বাণিজ্য নয়, রোগীদের প্রকৃত সেবা দিতে হবে: চিকিৎসকদের আতিক</h5>
                        </li>
                    </ul>
                </div>



                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="height: 380px;">
                    <ul style="border: 1px solid #f9f0f0;">
                        <li class="h3 text-dark" style="padding-left:5px">ধর্ম</li>
                        <li>
                            <img class="img-responsive"  height="130px" width="284px" src="https://cdn.jagonews24.com/media/imgAllNew/SM/2019November/timetable-20221211080034.jpg">
                            <!-- <h5 class="text-dark" style="padding: 5px 0px 5px 5px;">নামাজের সময়সূচি : ১১ ডিসেম্বর ২০২২</h5> -->
                        </li>

                        <li style="border-top: 1px dashed #cfc8c8;border-bottom: 1px dashed #cfc8c8;padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark">আল্লাহ ছাড়া অন্যের নামে মানত করা শিরক</h5>
                        </li>
                        <li style="padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark">মুসাফির অবস্থায় জোহরের নামাজ কাজা হলে কী করবেন?</h5>
                        </li>
                        <li style="padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark">মুসাফির অবস্থায় জোহরের নামাজ কাজা হলে কী করবেন?</h5>
                        </li>
                    </ul>
                </div>


                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="height: 380px;">
                    <ul style="border: 1px solid #f9f0f0;">
                        <li class="h3 text-dark" style="padding-left:5px">সাহিত্য</li>
                        <li>
                            <img class="img-responsive"  height="130px" width="284px" src="https://cdn.jagonews24.com/media/imgAllNew/SM/2019November/nodi-20221210140542.jpg">
                            <!-- <h5 class="text-dark" style="padding: 5px 0px 5px 5px;">হাসান মাহাদির গল্প: নদীর নাম ধনাগোদা</h5> -->
                        </li>

                        <li style="border-top: 1px dashed #cfc8c8;border-bottom: 1px dashed #cfc8c8;padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark"> সুবাইতা প্রিয়তির তিনটি কবিতা</h5>
                        </li>
                        <li style="padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark">বিজয়ের তিনটি কবিতা</h5>
                        </li>
                        <li style="padding: 5px 0px 5px 5px;">
                           <h5 class="text-dark">বিজয়ের তিনটি কবিতা</h5>
                        </li>
                    </ul>
                </div>

                     
        </div>
    </div>                  
</section>
 