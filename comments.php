<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>
<div class="contanier"> 
	<h2><?php 
  $alpha_cn = get_comments_number();
   if(1== $alpha_cn){
     _e(" 1 comments closed");
   }else{
     echo  $alpha_cn."  ".   __(" comments closed");
   }


     
	?></h2>
<?php
wp_list_comments( );
if(!comments_open( )){
	_e("No comments closed");
}

comment_form();
the_comments_pagination( array(
'prev_text' => "prev text",
'next_text' =>"next text"

) );
?>
</div>


<?php
/*$args =  array(
	'status' =>'approve',
	'post_id' => get_the_ID()
);

$comment = new WP_Comment_Query;
$comments = $comment->query($args);

if($comments){
	foreach ($comments as $comment) {
		echo get_avatar( $comment, 64);
		comment_author( $comment );
		comment_text();
		//echo 'p'.$comment->comment_content.'p';
	}
	
}else{
	echo "No Comments found";
}