<?php
    $this->db->limit(4);
    $this->db->select('news_category.name as cat_name,news.*');
    $this->db->from('news_category');
    $this->db->where('news.news_category_id = news_category.news_category_id');
    $this->db->where('news.news_category_id',10);

    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('status','published');
    $results = $this->db->get('news')->result();
?>

<section class="page-section with-sidebar pad-tb-5" style="margin-top:20px;">
    <div class="container-fluid bg-info">
        <div class="">

            <a href="<?php echo base_url(); ?>home/special_report">
                <h3> বিশেষ প্রতিবেদন</h3>
            </a>

                <div class="row">
                    <?php foreach ($results as $key => $row) { ?>
                    <div class="col-sm-6 col-xs-12">
                        <a href="<?php echo $this->Crud_model->link_news($row->cat_name, $row->news_id);?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="media">
                                        <span class="media-link">
                                            <img class="img-thumbnail img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$row->news_id,'','','thumb','src','multi','one');?>" alt=""/>
                                        </span> 
                                    </div>
                                </div>

                                <div class="col-md-8 pad-l-0 hidden-sm hidden-xs">
                                    <div class="caption down">
                                        <h4 class="caption-title">
                                            <a href="<?php echo $this->Crud_model->link_news($row->cat_name, $row->news_id);?>">
                                                <?php echo word_limiter($row->title,10);?>
                                            </a>
                                        </h4>
                                        <div class="caption-text">
                                            <?php echo word_limiter($row->summary,15);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <hr style="border-top: 1px solid #cbcbcb;">

                    </div>
                    <?php } ?>

            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->
<style>
.block-title{
	margin-bottom:10px;
}
</style>