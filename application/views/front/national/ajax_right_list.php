<!-- photo list  -->
<div class="row mar-lr--5">
    <?php 
    dd($results);
   /* foreach ($variable as $key => $value) {
      
    }*/ 
    ?>
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
