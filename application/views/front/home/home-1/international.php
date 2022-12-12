<?php
	$this->db->limit($detail_news_data['count']);
    $this->db->order_by('serial_6','desc');
    $this->db->order_by('news_id','desc');
	$this->db->where('news_speciality_id',6);
	$this->db->where('status','published');
	$detail_news	= $this->db->get('news')->result_array();
?>
<section class="page-section with-sidebar pad-tb-5" style="margin-top:20px">
    <div class="container-fluid">
        <div class="row mar-lr--5">
            <h3 style="margin-left:8px">আন্তর্জাতিক</h3>
            <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 content" id="content">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    if(isset($detail_news[0])){
                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news[0]);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">

                            <div class="col-md-12">
                                <?php
                                    if(isset($detail_news[1])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[1]);
                                    }
                                ?>
                            </div>
                            <div class="col-md-12 mar-t-5">
                                <?php
                                    if(isset($detail_news[2])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[2]);
                                    }
                                ?>
                            </div>
                            <div class="col-md-12 mar-t-5">
                                <?php
                                    if(isset($detail_news[4])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[4]);
                                    }
                                ?>
                            </div>
                            <div class="col-md-12 mar-t-5">
                                <?php
                                    if(isset($detail_news[6])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[6]);
                                    }
                                ?>
                            </div>
                            <div class="col-md-12 mar-t-5">
                                <?php
                                    if(isset($detail_news[8])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[8]);
                                    }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
