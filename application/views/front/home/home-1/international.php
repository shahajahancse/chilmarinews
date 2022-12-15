<?php
	$this->db->limit(4);
    $this->db->select('news_category.name as cat_name,news.*');
    $this->db->from('news_category');
    $this->db->where('news.news_category_id = news_category.news_category_id');

    $this->db->order_by('serial_6','desc');
    $this->db->order_by('news_id','desc');
	$this->db->where('news.news_speciality_id',6);
	$this->db->where('news.status','published');
	$detail_news	= $this->db->get('news')->result_array();
?>
<section class="page-section with-sidebar pad-tb-5" style="margin-top:20px">
    <div class="container-fluid">
        <div class="row mar-lr--5">
            <h3 style="margin-left:15px" class="text-dark"><b>আন্তর্জাতিক</b></h3>
            <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 content" id="content">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <a href="<?php echo $this->Crud_model->link_news($detail_news[0]['cat_name'], $detail_news[0]['news_id']);?>">
                            <div class="col-md-12">
                                <?php
                                    if(isset($detail_news[0])){
                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news[0]);
                                    }
                                ?>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            
                            <div class="col-md-12 mar-t-5">
                                <a href="<?php echo $this->Crud_model->link_news($detail_news[1]['cat_name'], $detail_news[1]['news_id']);?>">
                                <?php
                                    if(isset($detail_news[1])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[1]);
                                    }
                                ?>
                                </a>
                            </div>

                            <div class="col-md-12 mar-t-5">
                                <a href="<?php echo $this->Crud_model->link_news($detail_news[2]['cat_name'], $detail_news[2]['news_id']);?>">
                                <?php
                                    if(isset($detail_news[2])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[2]);
                                    }
                                ?>
                                </a>
                            </div>

                            <div class="col-md-12 mar-t-5">
                                <a href="<?php echo $this->Crud_model->link_news($detail_news[3]['cat_name'], $detail_news[3]['news_id']);?>">
                                <?php
                                    if(isset($detail_news[3])){
                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[3]);
                                    }
                                ?>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
