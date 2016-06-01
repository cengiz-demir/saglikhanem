<?php
/**
 * The template for displaying 404 (Not Found) pages.
 */
?>
<?php get_header(); ?>
<div id="page" class="error">
	<article class="article">
		<div id="content_box" >
			<header>
				<div class="title">
					<h1><?php _e('Aradığın Sayfayı Bulamadım!', 'sociallyviral' ); ?></h1>
				</div>
			</header>
			<div class="post-content">
				<p><?php _e('404 Error!.', 'sociallyviral' ); ?></p>
				<p><?php _e('Yukarıdaki kategorileri takip ederek aradığınız sayfayı bulabilir ya da buradan arama yapabilirsiniz.', 'sociallyviral' ); ?></p>
				<?php get_search_form();?>
			</div><!--.post-content--><!--#error404 .post-->
		</div><!--#content-->
	</article>
	<?php get_sidebar(); ?>
</div><!--#page-->
<?php get_footer(); ?>