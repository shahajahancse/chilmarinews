<?php
    $this->db->limit(3);
    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('news_speciality_id',3);
    $this->db->where_in('news_category_id',[4,5]);
    $this->db->where('status','published');
    $detail_news    = $this->db->get('news')->result_array();
?>



<section class="page-section pad-tb-5">
    <div class="container-fluid">
    <h3 style="margin-left:10px">খেলাধুলা</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-6">

                        <div class="col-lg-12" >
                            <img height="300px" width="600px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/liton-20221210173454.jpg">
                           
                            <div class="row">
                                <h3 style="margin-left: 11px;">বিজয়ের পর আউট হয়ে গেলেন লিটন-মুশফিকও</h3>
                            </div>
                            <div class="row">
                                <p style="margin-left: 11px;">এনামুল হক বিজয়ই নয় শুধু, ফর্মে নেই মুশফিকুর রহিমও। অধিনায়ক লিটন দাসের ফর্মহীনতা নয়, স্রেফ...</p>
                            </div>
                        </div>

                </div>
                  



                <div class="col-lg-6">
                        
                <div class="col-lg-6">
                            <img height="120px" width="270px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                            <h4>শুরুতেই আউট হয়ে গেলেন এনামুল হক বিজয়</h4>
                </div>

                <div class="col-lg-6">
                            <img height="120px" width="270px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                            <h4>শুরুতেই আউট হয়ে গেলেন এনামুল হক বিজয়</h4>
                </div>

                <div class="col-lg-6">
                            <img height="120px" width="270px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                            <h4>শুরুতেই আউট হয়ে গেলেন এনামুল হক বিজয়</h4>
                </div>

                <div class="col-lg-6">
                            <img height="120px" width="270px" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/fhfg-20221210162220.jpg">
                            <h4>শুরুতেই আউট হয়ে গেলেন এনামুল হক বিজয়</h4>
                </div>

                   
                </div>

            </div>
       

            </div>
        </div>
    </div>
</section>