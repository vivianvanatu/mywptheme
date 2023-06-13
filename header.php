<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists('wp_body_open')) {
        wp_body_open();
    } ?>
    <div id="page" class="site">
        <header id="master-header" class="site-header" role="banner">
            <?php get_template_part( 'template-parts/header/nav' ); ?>
        </header>
        <div id="content" class="site-content">

        
    