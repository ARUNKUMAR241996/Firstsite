<!DOCTYPE html>
<head>
<title><?php wp_title();?></title>
<?php wp_head();?>
<style>

</style>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
</head>
<?php wp_nav_menu(array('container_class'=>'menubar'));?>