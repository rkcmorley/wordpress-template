<?php
/*The template for the Main Sidebar*/
?>

<?php 
//Using the ID of the sidebar that we created from the functions.php
if (is_active_sidebar('main-sidebar'))
:?>
<aside class="sidebar widget-area">
    <?php dynamic_sidebar('main-sidebar'); ?>
</aside>
<?php 
endif;
?>