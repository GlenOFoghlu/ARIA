<?php
get_header(); 

$args = array(
	'post_type' => 'chaplains'
);
query_posts($args);
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


<?php
require(WEBTREATS_INCLUDES . "/var.php");
?>

<div id="intro_blurb"<?php if ($header_disable){echo ' style="display:none;"';}?>>
	<div class="inner">
		<div id="intro_blurb_title"><span><?php the_title(); ?></span></div>
			<div id="blurb">
			profile of <?php the_title(); ?>
		</div>
	</div><!-- inner -->						
</div><!-- intro_blurb -->	

<div class="clearboth"></div>

<div id="breadcrumbs">
	<div class="inner">
		<?php if (!$breadcrumb_disable){ if (class_exists('simple_breadcrumb')) { $bc = new simple_breadcrumb; }} ?>
	</div><!-- inner -->							
</div><!-- breadcrumbs -->


<div id="has_sidebar">
	<div id="body_block">
		<div class="inner">
			<div id="primary">
				<div class="content">


<div class="post" id="post_id_<?php the_ID(); ?>">
		
<h2 class="blog_header"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>


	<div class="entry">
    test
<?php 
//photo from custom post value 
$cphoto= implode(get_post_custom_values('chaplain_photo'));
//if ($cphoto) {echo get_bloginfo('url') ."<br>" . $cphoto;}
if ($cphoto) {echo "<img src='" . get_bloginfo( 'url')."/wp-content/plugins/verve-meta-boxes/tools/timthumb.php?src=" . $cphoto . "&w=180&zc=1&q=95' class='alignright frame'>";}
?>
		<?php the_content(); ?>
		<div class="clearboth"></div>
	</div>
	<?php wp_link_pages('before=<div id="page-links">Pages: &after=</div>'); ?>
			
</div>


	<?php endwhile; endif; ?>


<?php get_sidebar('chaplain'); ?>

<?php get_footer('chaplain'); ?>
