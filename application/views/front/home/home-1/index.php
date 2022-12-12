<!-- CONTENT AREA -->
<?php
$top_news_data = json_decode($this->Crud_model->get_settings_value('ui_settings','top_news','value'),true);
// $sliding_news = json_decode($this->Crud_model->get_settings_value('ui_settings','sliding_news','value'),true);
$detail_news_data = json_decode($this->Crud_model->get_settings_value('ui_settings','detail_news','value'),true);
$photo_gal_data = json_decode($this->Crud_model->get_settings_value('ui_settings','photo_gal','value'),true);
$special_category_data = json_decode($this->Crud_model->get_settings_value('ui_settings','special_category','value'),true);
$video_gal_data = json_decode($this->Crud_model->get_settings_value('ui_settings','video_gal','value'),true);
$home_cat_data = json_decode($this->Crud_model->get_settings_value('ui_settings','home_cat','value'),true);
?>
<div class="content-area">
	
    <!--  সর্বশেষ সংবাদ-->
    <?php
		if($top_news_data['status']=='ok'){
			include 'top_news.php';
		}
	?>


    <!-- মতামত-->

    <?php
    	if($detail_news_data['status']=='ok'){
			include 'comment.php';
		}
	?>

    <!-- ভিডিও গ্যালারি -->
    <?php
		if($video_gal_data['status']=='ok'){
			include 'video_gallery.php';
		}
	?>


    <!-- খেলাধুলা -->
    <?php
    	if($detail_news_data['status']=='ok'){
			include 'sport.php';
		}
	?>
    <!-- দেশজুড়ে -->
    <?php
    	if($detail_news_data['status']=='ok'){
			include 'deshjure.php';
		}
	?>
    <!-- আন্তর্জাতিক -->
    <?php
    	if($detail_news_data['status']=='ok'){
			include 'international.php';
		}
	?>
    <!-- রাজনীতি -->
    <?php
    	if($detail_news_data['status']=='ok'){
			include 'political.php';
		}
	?>
    <!-- অর্থনীতি -->
    <?php
    	if($detail_news_data['status']=='ok'){
			include 'ecoonomics.php';
		}
	?>
    <!-- জাতীয় -->
    <?php
    	if($detail_news_data['status']=='ok'){
			include 'national.php';
		}
	?>
    <!-- শিক্ষা / স্বাস্থ্য / ধর্ম / সাহিত্য -->
    <?php
    	if($detail_news_data['status']=='ok'){
			include 'edu_hel_rel_lit.php';
		}
	?>
    <!-- বিশেষ প্রতিবেদন -->
    <?php
		if($special_category_data['status']=='ok'){
			include 'special_report.php';
		}
	?>
    <!-- ফটো গ্যালারি-->
    <?php
		if($photo_gal_data['status']=='ok'){
			include 'photo_gallery.php';
		}
	?>

    

    

    <!-- <section class="page-section with-sidebar pad-tb-5">
    	<div class="container">
            <!- /advertisement space -->
            <!-- <div class="advertise_space2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_1'); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_2'); ?>
                    </div>
                </div>
            </div> -->
			<!-- /advertisement space -->
        <!-- </div> -->
    <!-- </section> -->    
    <!-- < ?php
		if($sliding_news['status']=='ok'){
			include 'top_slider.php';
		}
	?> -->
    <!-- <section class="page-section with-sidebar pad-tb-5">
    	<div class="container"> -->
            <!-- /advertisement space -->
            <!-- <div class="advertise_space2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_3'); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_4'); ?>
                    </div>
                </div>
            </div> -->
            <!-- /advertisement space -->
        <!-- </div>
    </section> -->

    <!-- <section class="page-section with-sidebar pad-tb-5">
    	<div class="container"> -->
            <!-- /advertisement space -->
            <!-- <div class="advertise_space2">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home3x1('home_5'); ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home3x1('home_6'); ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home3x1('home_7'); ?>
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- /advertisement space -->
        <!-- </div>
    </section> -->

    <!-- <section class="page-section with-sidebar pad-tb-5">
    	<div class="container"> -->
            <!-- <-- /advertisement space -->
            <!-- <div class="advertise_space2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_8'); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        <  php echo $this->Html_model->advertise_home2x1('home_9'); ?>
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- /advertisement space -->
        <!-- </div>
    </section> -->
    <!-- < ?php
		if($special_category_data['status']=='ok'){
			include 'special_category.php';
		}
	?> -->
    <!-- <section class="page-section with-sidebar pad-tb-5">
    	<div class="container"> -->
            <!-- /advertisement space -->
            <!-- <div class="advertise_space2">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home3x1('home_10'); ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home3x1('home_11'); ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home3x1('home_12'); ?>
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- /advertisement space -->
        <!-- </div>
    </section> -->
    <!-- < ?php
		if($video_gal_data['status']=='ok'){
			include 'video_gallery.php';
		}
	?> -->
    <!-- <section class="page-section with-sidebar pad-tb-5">
    	<div class="container"> -->
            <!-- /advertisement space -->
            <!-- <div class="advertise_space2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_13'); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_14'); ?>
                    </div>
                </div>
            </div> -->
            <!-- /advertisement space -->
       	<!-- </div>
    </section> -->
    <!-- < ?php
		if($home_cat_data['status']=='ok'){
			include 'category_news.php';
		}
	?> -->
    <!-- <section class="page-section with-sidebar pad-tb-5">
    	<div class="container"> -->
            <!-- /advertisement space -->
            <!-- <div class="advertise_space2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_15'); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                        < ?php echo $this->Html_model->advertise_home2x1('home_16'); ?>
                    </div>
                </div>
            </div> -->
            <!-- /advertisement space -->
      	<!-- </div>
  	</section> -->
</div>
<style>
.block-title{
	/*margin-left:-10px;*/
	margin-bottom:10px;
}
</style>
