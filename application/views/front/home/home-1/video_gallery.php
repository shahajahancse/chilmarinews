<?php
	$this->db->limit(5);
	$this->db->order_by('video_id','desc');
	$this->db->where('status','published');
	$videos	= $this->db->get('video')->result_array();
?>
<section class=" with-sidebar pad-tb-5 gallery_slider">
    <div class="container-fluid">
        <div class="panel">
            <div class="panel-heading" style="border:0px;background-color:white ">
                <a style="margin-left: 1px;" href="<?php echo base_url();?>home/video_gallery"><h3  class="text-dark"> <b>ভিডিও</b>
                    <!-- < ?php echo translate($video_gal_data['title']); ?> -->
                </h3></a>
                <a style="margin-top:-38px" href="<?php echo base_url();?>home/video_gallery" class="btn_seeMore">
                   <!-- < ?php echo translate('see_more'); ?> --> <span class="text-dark ">আরও দেখুন</span>
                </a>
            </div>
            <div class="panel-body">
                <div class="row mar-lr--5 mar-t-0 parent">
                    <div class="col-md-12 pad-lr-5 mar-t-0 <?php if($video_gal_data['style']==2){ echo 'pull-md-left'; }?>">
                        <div class="row mar-lr--5 mar-t-0">
                            
                            <div class="col-sm-3 pad-lr-5 mar-t-0">
                                <?php
                                    if(isset($videos[1])){
                                        echo $this->Html_model->video_box('3',$videos[1]);
                                    }
                                ?>
                            </div>
                            
                            <div class="col-sm-3 pad-lr-5 mar-t-0">
                                <?php
                                    if(isset($videos[2])){
                                        echo $this->Html_model->video_box('3',$videos[0]);
                                    }
                                ?>
                            </div>
                           
                            <div class="col-sm-3 mar-t-5 pad-lr-5">
                                <?php
                                    if(isset($videos[3])){
                                        echo $this->Html_model->video_box('3',$videos[3]);
                                    }
                                ?>
                            </div>
                            
                            <div class="col-sm-3 mar-t-5 pad-lr-5">
                                <?php
                                    if(isset($videos[4])){
                                        echo $this->Html_model->video_box('3',$videos[4]);
                                    }
                                ?>
                            </div>


                            <div class="col-sm-3 pad-lr-5 mar-t-0">
                                <?php
                                    if(isset($videos[1])){
                                        echo $this->Html_model->video_box('3',$videos[0]);
                                    }
                                ?>
                            </div>
                            
                            <div class="col-sm-3 pad-lr-5 mar-t-0">
                                <?php
                                    if(isset($videos[2])){
                                        echo $this->Html_model->video_box('3',$videos[1]);
                                    }
                                ?>
                            </div>
                           
                            <div class="col-sm-3 mar-t-5 pad-lr-5">
                                <?php
                                    if(isset($videos[3])){
                                        echo $this->Html_model->video_box('3',$videos[3]);
                                    }
                                ?>
                            </div>
                            
                            <div class="col-sm-3 mar-t-5 pad-lr-5">
                                <?php
                                    if(isset($videos[4])){
                                        echo $this->Html_model->video_box('3',$videos[4]);
                                    }
                                ?>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="col-md-6 pad-lr-5 mar-t-0">
                        <div class="row mar-lr--5 mar-t-0">
                            <div class="col-md-12 pad-lr-5 mar-t-0">
                                < ?php
                                    if(isset($videos[0])){
                                        echo $this->Html_model->video_box('2',$videos[0]);
                                    }
                                ?>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->
<script>
$(document).ready(function(){
	setTimeout(function(){
		// set_video_frame();
		// set_video_box();
	},500);
});
function set_video_box(){
	var max_height = 0;
	$('.video_box_3').each(function(){
        var current_height= parseInt($(this).css('height'));
		if(current_height >= max_height){
			max_height = current_height;
		}
    });
	$('.video_box_3').css('height',max_height);
}
function set_video_frame(){
	var total_space = parseInt($('.parent').css('width'));
	var main_frame_width = total_space/2;
	var sm_frame_width = main_frame_width/2;

	$('.video_box_2').each(function(){
        $(this).find('iframe').attr('width',main_frame_width);
		$(this).find('video').attr('width',main_frame_width);
    });
	$('.video_box_3').each(function(){
        $(this).find('iframe').attr('width',sm_frame_width);
		$(this).find('video').attr('width',sm_frame_width);
    });
}
</script>
