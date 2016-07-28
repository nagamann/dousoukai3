<?php get_header(); ?>
<?php
if (have_posts()):
while(have_posts()):
the_post();
?>
<div class="pankuzu">
	<div class="body">
		<p><a href="">HOME</a>＞<?php the_category(','); ?>＞<a href=""><?php the_title(); ?></a></p>
	</div>
</div>
<div class="mainvisual secondvisual">
  <div class="body">
    <h2 class="visualcopy"><?php the_category(','); ?></h2>
  </div>
</div>
<div class="wrapper">
  <div class="body">  	    
    <article <?php post_class(); ?>><span class="label"><?php the_category(','); ?></span>
      <h3 class="title"><?php the_title(); ?></h3>
      <!-- /#entry_title -->
      <p class="date"><?php echo get_the_date(); ?></p>
      <div class="entryContent">
          <?php the_content(); ?>
          </div>
      <!-- /.entry_body --> 
    </article>
    <?php get_sidebar(); ?>    
  </div>
</div>
<?php
endwhile;
endif;
?>
<?php get_footer(); ?>