<?php
    /* Template Name: Two-Column Sidebar (Right) Template */
get_header();
?>

<div class="main-content-width-wrapper">
<div class="two-column-entry">
<h1><?php echo get_the_title(); ?></h1>
<main class="main-content">
<?php
//Start of loop. If we have posts, while we have the posts, use the posts and use the content
if (have_posts()) :
    while (have_posts()) :
    the_post();
the_content();
endwhile;
endif;
?>
</main>       
</div>
<?php get_sidebar('main-sidebar'); ?>
</div>

<?php
get_footer();
?>