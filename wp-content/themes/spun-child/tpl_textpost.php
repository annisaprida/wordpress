<?
/*
Template Name: Text Post
 */
?>
<?php 
get_header();
?>
<script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url');?>/js/to-top.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.jpanelmenu.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var jPM = $.jPanelMenu({duration: 300,animate: true});
	jPM.on();
});
$('nav li ul').hide().removeClass('fallback');
$('nav li').hover(
	function () {
		$('ul', this).stop().slideDown(100);
	},
	function () {
		$('ul', this).stop().slideUp(100);
	}
	);
</script>

<div class="menu-trigger">Sidebar Menu</div>
<ul id="menu" style="display: none;">
			<li><a href="#">Overview</a></li>
			<li><a href="#usage">Usage</a></li>
			<li><a href="#inner-workings">Inner-Workings</a></li>
			<li><a href="#animation">Animation</a></li>
			<li><a href="#options">Options</a></li>
			<li><a href="#api">API</a></li>
			<li><a href="#tips">Tips &amp; Examples</a></li>
			<li><a href="#about">About</a></li>
<div class="accordion">
    <h3>Heading</h3>
    <div>cactuspants! <div>I am an inner div</div></div>

    <h3>Heading</h3>
    <div>Hats</div>

    <h3>Heading</h3>
    <div>Hi!</div>
</div>
<div class="wrapper">
<div class="expand_top"><div class="expand_all"></div></div>
<div class="expand_wrapper">
    <h2 class="expand_heading"><a href="#">Wordpress Theme Development</a></h2>
     
    <div class="toggle_container">
        <div class="box">
            <h3>Wordpress Theme Development</h3>
             
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
    </div>
     
    <h2 class="expand_heading"><a href="#">Magento E-commerce</a></h2>
 
    <div class="toggle_container">
        <div class="box">
            <h3>Need Shopping website?</h3>
         
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
 
    </div>
</div>
</div>
</ul>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="post-dates"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></div>
		<div id="post-content"><?php get_template_part( 'content', 'page' ); ?></div>
		<?php comments_template( '', true ); ?>
		<?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
		<br/>
		<?php echo get_the_author();?>
	<?php endwhile; // end of the loop. ?>
</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
<?php get_sidebar(); ?>

<div id="totop">
	<p id="back-top">
		<a href="#top">To Top</a>
	</p>
</div>

<?php get_footer(); ?>