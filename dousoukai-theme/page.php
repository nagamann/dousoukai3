<?php get_header(); ?>
<?php
if (have_posts()):
while(have_posts()):
the_post();
?>
<div class="pankuzu">
	<div class="body">
		<p><a href="">HOME</a>＞<a href=""><?php the_title(); ?></a></p>
	</div>
</div>
<div class="mainvisual secondvisual">
  <div class="body">
    <h2 class="visualcopy"><?php the_title(); ?></h2>
  </div>
</div>
<div class="wrapper">
  <div class="body">
  	
    <?php the_content(); ?>
  </div>
</div>
<?php
endwhile;
endif;
?>
<?php get_footer(); ?>