<?php 

/* Main Header Template */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="main-navigation-container">
            <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/glass-eye-logo.png" alt="" class="logo"></a>
<?php 
/*Uses special WP function wp_nav_menu, puts a class name main-navigation to ul and our menu is a primary one*/
wp_nav_menu($args = array(
    'menu_class' => 'main-navigation',
    'theme_location' => 'primary',
));
?>
        </nav>
    </header>