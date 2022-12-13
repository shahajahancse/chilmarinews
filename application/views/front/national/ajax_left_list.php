<!-- photo list  -->
<div class="row mar-lr--5">
	<div class="row">
	    <div class="col-sm-8">
            <a href="<?php echo $this->Crud_model->link_news($results[0]['cat_name'], $results[0]['news_id']);?>">
            <div class="img-box">
                <?php 
                    //dd($results[0]['description']); 
                    $img = json_decode($results[0]['img_features'],true);
                    foreach($img as $row){
                        if($row['index'] == 0){
                ?>
                    <img style="width: 100% !important;" alt="<?php echo word_limiter($results[0]['title'],20);?>" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$results[0]['news_id'],'','','thumb','src','multi','one');?>" class="img-thumbnail img-responsive image_delay">
                <?php }}?>
            </div>
            </a>
        </div>
        <div class="col-sm-4">
            <div class="">
                <h3 style="font-size:1.5em;">
                    <a class="pt-3" href="<?php echo $this->Crud_model->link_news($results[0]['cat_name'], $results[0]['news_id']);?>"> <?php echo $results[0]['title'];?> </a>
                </h3>
                <p><?php echo word_limiter($results[0]['description'],40);?></p>
            </div>
        </div>
	</div>
    <br>


    <div class="row">
    <?php foreach ($results as $key => $row)  { 
    	if ($key == 0 ) {  } else { ?>
			<a href="<?php echo $this->Crud_model->link_news($row['cat_name'], $row['news_id']);?>">
            <div class="col-lg-4">

                <img style="width: 100%; height: 160px" class=" image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$row['news_id'],'','','thumb','src','multi','one');?>" alt="image">

                <p><?php echo $row['title'] ?></p>
            </div>
            </a>
		<?php } ?>
	<?php } ?>
    </div>
</div>

<!-- /photo list -->

<!-- Pagination -->
<div class="pagination-wrapper">
    <?php echo $this->ajax_pagination->create_links();  ?>
</div>
<!-- /Pagination -->
<script>
    $(document).ready(function(){
        load_iamges();
    });
</script>
