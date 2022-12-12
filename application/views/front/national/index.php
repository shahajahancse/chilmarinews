<?php
    $this->db->limit(5);
    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('news_speciality_id',3);
    $this->db->where('status','published');
    $top_news   = $this->db->get('news')->result_array();
?>
<section class="page-section pad-tb-5">
    <div class="container-fluid">
        <div class="row mar-lr--5"> 
            <span class="btn btn-theme-transparent pull-left hidden-lg hidden-md" style="position:relative; z-index:100;padding: 5px 12px; border-radius:4px;width: 100%; margin-bottom: 15px;" onClick="open_sidebar();">
                <i class="fa fa-bars"></i>
            </span>
            <ol class="breadcrumb breadcrumb-custom hidden-sm hidden-xs">
                <li>
                    <a href="<?php echo base_url(); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="active">
                    <span>
                        <?php echo translate($page_title); ?>
                    </span>
                </li>
            </ol>


            <div  class="col-lg-8 col-md-6 col-sm-12 col-xs-12" >
                <?php include 'left_side.php'; ?>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <?php include 'right_side.php'; ?>
            </div>

        </div>
    </div>
</section>