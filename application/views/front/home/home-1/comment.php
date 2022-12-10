<?php
	$this->db->limit($detail_news_data['count']);
    $this->db->order_by('serial_6','desc');
    $this->db->order_by('news_id','desc');
	$this->db->where('news_speciality_id',6);
	$this->db->where('status','published');
	$detail_news	= $this->db->get('news')->result_array();
?>
<style>
.img {
  border-radius: 50%;
}

</style>
<section class="page-section with-sidebar pad-tb-5" style="margin-bottom:35px">
    <div class="container-fluid">
        <div class="row mar-lr--5">
            <h3 style="margin-left:10px">মতামত</h3>

            <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 content" id="content">
                <div class="row">
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 col-lg-12">
                        <div class="row">
                           
                            <div class="col-lg-4" style="border-right:1px solid #cbcbcb">
                                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-4 ">
                                        <img class="img" src="https://slp-statics.astockcdn.net/static_assets/staging/22spring/free/browse-vector-categories-collections/Card4_399895799.jpg" alt="Avatar" style="width: 100px;height: 100px;">
                                    </div>
                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-8 ">
                                            <p style="font-size:15px">মেসির হাতেই কি বিশ্বকাপ?</p>
                                            <p>ডা. পলাশ বসু</p>
                                </div>
                                
                            </div>


                            <div class="col-lg-4" style="border-right:1px solid #cbcbcb">
                                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-4 ">
                                        <img class="img" src="https://slp-statics.astockcdn.net/static_assets/staging/22spring/free/browse-vector-categories-collections/Card4_399895799.jpg" alt="Avatar" style="width: 100px;height: 100px;">
                                    </div>
                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-8 ">
                                            <p style="font-size:15px">তিন জোটের রূপরেখা ও বিভাজনের রাজনীতি</p>
                                            <p>সৈয়দ ইশতিয়াক রেজা</p>
                                </div>
                                
                            </div>


                            <div class="col-lg-4" style="border-right:1px solid #cbcbcb">
                                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-4 ">
                                        <img class="img"  src="https://slp-statics.astockcdn.net/static_assets/staging/22spring/free/browse-vector-categories-collections/Card4_399895799.jpg" alt="Avatar" style="width: 100px;height: 100px;">
                                    </div>
                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-8 ">
                                            <p style="font-size:15px">যুক্তি এবং ন্যায় প্রতিষ্ঠার ক্ষেত্রে জনবান্ধব হোক মূসক</p>
                                            <p>প্রণব মজুমদার</p>
                                </div>
                                
                            </div>
                                


                        </div>

                    </div>
                </div>
            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
