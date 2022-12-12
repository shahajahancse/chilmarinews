<?php
	$this->db->limit(3);
    $this->db->order_by('serial_8','desc');
    $this->db->order_by('news_id','desc');
	$this->db->where('news_speciality_id',8);
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

            <div class="row">
                <?php foreach ($detail_news as $key => $row) { ?>
                    <div style="margin-bottom: 15px;border-right:1px solid #cbcbcb" class="col-xs-12 col-md-4 col-lg-4 col-sm-4" style="border-right:1px solid #cbcbcb">
                        <div class="row">    
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                                <img style="width: 100px;height: 100px;" class="img img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$row['news_id'],'','','thumb','src','multi','one');?>" alt="<?php echo $row['title']; ?>">

                                <!-- <img class="img" src="https://slp-statics.astockcdn.net/static_assets/staging/22spring/free/browse-vector-categories-collections/Card4_399895799.jpg" alt="Avatar" > -->
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <p style="font-size:15px;margin-top: 10px;"><?php echo $row['title'] ?></p>
                                <p><?php echo $row['summary'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
