<?php
    $this->db->limit(5);
    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('news_speciality_id',3);
    $this->db->where('status','published');
    $top_news	= $this->db->get('news')->result_array();
?>
<section class="page-section pad-tb-5">
    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-9">
            <div class="row">
    <!-- top news -->
                <div class="col-lg-9">
                        <div class="col-lg-8" >
                            <img height="200px" width="400px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                            <p>গোলাপবাগে বিএনপির ঢাকা বিভাগীয় গণসমাবেশ/ছবি: সংগৃহীত</p>
                        </div>

                        <div class="col-lg-4" > 
                            <div class="row">
                                <h3 >গণসমাবেশ থেকে বিএনপির ১০ দফা ঘোষণা</h3>
                            </div>
                            <div class="row">
                                <p>রাজধানীর গোলাপবাগ মাঠে বিএনপির ঢাকা বিভাগীয় গণসমাবেশ থেকে ১০ দফা ঘোষণা করেছে দলটি। আগামী জাতীয় সংসদ...</p>
                            </div>
                        </div>
                </div>
                  
                <div class="col-lg-3">
                        <div class="col-lg-12">
                            <img height="120px" width="210px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                            <h4>সমাবেশ শেষের অপেক্ষায় সর্বোচ্চ সতর্ক অবস্থানে ৩২ হাজার ফোর্স</h4>
                        </div>
                       
                   
                </div>

            </div>
        <!--after top news content  -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-lg-8">
                        <h4 class="text-dark">বাংলাদেশের অগ্রগতির ভূয়সী প্রশংসা করেছে আইএমএফ: অর্থমন্ত্রী<h3>
                    </div>
                    <div class="col-lg-4">
                        <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p style="margin-left:12px">সম্প্রতি সফরে আসা আন্তর্জাতিক মুদ্রা তহবিলের (আইএমএফ) প্রতিনিধিদল বাংলাদেশের</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="col-lg-8">
                        <h4 class="text-dark">বাংলাদেশের অগ্রগতির ভূয়সী প্রশংসা করেছে আইএমএফ: অর্থমন্ত্রী<h3>
                    </div>
                    <div class="col-lg-4">
                        <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p style="margin-left:12px">সম্প্রতি সফরে আসা আন্তর্জাতিক মুদ্রা তহবিলের (আইএমএফ) প্রতিনিধিদল বাংলাদেশের</p>
                        </div>
                    </div>
                </div>
                


                <div class="col-lg-4">
                    <div class="col-lg-8">
                        <h4 class="text-dark">বাংলাদেশের অগ্রগতির ভূয়সী প্রশংসা করেছে আইএমএফ: অর্থমন্ত্রী<h3>
                    </div>
                    <div class="col-lg-4">
                        <img style="margin-left: -20px;margin-top: 10px;" height="80px" width="120px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p style="margin-left:12px">সম্প্রতি সফরে আসা আন্তর্জাতিক মুদ্রা তহবিলের (আইএমএফ) প্রতিনিধিদল বাংলাদেশের</p>
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









        <!-- <div class="row mar-lr--5"> 
           
                <div  class="col-lg-9 col-md-6 col-sm-12 col-xs-12 < ?php if($top_news_data['style']==2){ echo 'pull-left';} ?>" >
                    < ?php
                        if(isset($top_news[0])){
                            echo $this->Html_model->news_box('sqr_md','2',$top_news[0]); 
                        }
                    ?>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            	
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom:10px">
                                < ?php
                                    if(isset($top_news[1])){
                                        echo $this->Html_model->news_box('sqr_sm','2',$top_news[1]); 
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom:10px">
                                < ?php
                                    if(isset($top_news[1])){
                                        echo $this->Html_model->news_box('sqr_sm','2',$top_news[2]); 
                                    }
                                ?>
                            </div>
                                    

                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom:10px">
                                < ?php
                                    if(isset($top_news[1])){
                                        echo $this->Html_model->news_box('sqr_sm','2',$top_news[3]); 
                                    }
                                ?>
                            </div>
                        </div>

                </div> -->
        </div>
    </div>
</section>