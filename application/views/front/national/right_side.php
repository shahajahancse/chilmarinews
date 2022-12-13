
<?php
    $this->db->limit(10);
    $this->db->select('news_category.name as cat_name,news.*');
    $this->db->from('news_category');
    $this->db->where('news.news_category_id = news_category.news_category_id');

    $this->db->order_by('serial_3','desc');
    $this->db->order_by('news_id','desc');
    $this->db->where('news.news_speciality_id',3);
    $this->db->where('news.status','published');
    $results   = $this->db->get('news')->result_array();
?>

<div class="row mar-lr--5">
    <ul style="border: 1px solid #f9f0f0;">
        <li class="h3 text-dark" style="padding-left:5px">টপ নিউজ</li>
        <?php foreach ($results as $key => $row) { 
            if ($key == 0) { ?>
                <li>
                    <a href="<?php echo $this->Crud_model->link_news($row['cat_name'], $row['news_id']);?>">
                        <img class="image_delay"  height="130px" width="284px" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('news',$row['news_id'],'','','thumb','src','multi','one');?>">
                        <h5 class="text-dark" style="padding: 5px 0px 5px 5px;"><?php echo word_limiter($row['title'],10);?></h5>
                    </a>      
                </li> 
            <?php } else { ?>            
            <li style="border-top: 1px dashed #cfc8c8;border-bottom: 1px dashed #cfc8c8;padding: 5px 0px 5px 5px;">
                <a href="<?php echo $this->Crud_model->link_news($row['cat_name'], $row['news_id']);?>">
                   <h5 class="text-dark"> <?php echo word_limiter($row['title'],10);?></h5>
                </a>
            </li>
        <?php } } ?>
    </ul>
</div>


<script>
    $(document).ready(function(){
        load_iamges();
    });
</script>