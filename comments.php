<?php
/**
 * The template for displaying the comments.
 *
 * This contains both the comments and the comment form.
 */

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ( __('Please do not load this page directly. Thanks!', 'sociallyviral' ) );
 
if ( post_password_required() ) { ?>
<p class="nocomments"><?php _e('Bu yorumu görebilmek için şifreyi girmeniz gereklidir!.', 'sociallyviral' ); ?></p>
<?php
return;
}
?>
<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
	<div id="comments">
		<h4 class="total-comments"><?php comments_number(__('Henüz Hiçbir Yorum Yapılmamış', 'sociallyviral' ), __('Bir Yorum', 'sociallyviral' ),  __('% Yorum', 'sociallyviral' ) );?>: <?php echo get_the_title(); ?></h4>
			<ol class="commentlist">
				<div class="navigation">
					<div class="alignleft"><?php previous_comments_link() ?></div>
					<div class="alignright"><?php next_comments_link() ?></div>
				</div>
				<?php wp_list_comments('callback=mts_comments'); ?>
				<div class="navigation">
					<div class="alignleft"><?php previous_comments_link() ?></div>
					<div class="alignright"><?php next_comments_link() ?></div>
				</div>
			</ol>
		</div>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments"></p>
<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
	<div id="commentsAdd">
		<div id="respond" class="box m-t-6">
			<?php global $aria_req; $comments_args = array(
					'title_reply'=>'<h4><span>'.__('Yorum yapmaktan kaçınama', 'sociallyviral' ).'</span></h4>',
					'comment_notes_before' => '',
					'comment_notes_after' => '',
					'label_submit' => __( 'Yorum Gönder', 'sociallyviral' ),
					'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="'.__('Değerli Yorumunuz*', 'sociallyviral' ).'"></textarea></p>',
					'fields' => apply_filters( 'comment_form_default_fields',
						array(
							'author' => '<p class="comment-form-author">'
							.( $req ? '' : '' ).'<input id="author" name="author" type="text" placeholder="'.__('Adınız*', 'sociallyviral' ).'" value="'.esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
							'email' => '<p class="comment-form-email">'
							.($req ? '' : '' ) . '<input id="email" name="email" type="text" placeholder="'.__('E-Posta Adresiniz*', 'sociallyviral' ).'" value="' . esc_attr(  $commenter['comment_author_email'] ).'" size="30"'.$aria_req.' /></p>',
							'url' => '<p class="comment-form-url"><input id="url" name="url" type="text" placeholder="'.__('Web Site Adresiniz', 'sociallyviral' ).'" value="' . esc_url( $commenter['comment_author_url'] ) . '" size="30" /></p>'
						) 
					)
				); 
			comment_form($comments_args); ?>
		</div>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>
