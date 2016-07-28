<?php get_header(); ?>
<?php
if (have_posts()):
?>
<div class="pankuzu">
	<div class="body">
		<p><a href="">HOME</a>＞<?php the_category(','); ?></p>
	</div>
</div>
<div class="mainvisual secondvisual">
  <div class="body">
    <h2 class="visualcopy"><?php the_category(','); ?></h2>
  </div>
</div>
<div class="wrapper">
  <div class="body">
  		<div class="pagecnt">
	  		<span class="summary">100件中 1-20件目</span>
	  		<span class="noprev">&lt;</span><span class="current">1</span><a href="https://www.wan55.co.jp/column/?pageID=2" title="page 2" class="page"><span>2</span></a><a href="https://www.wan55.co.jp/column/?pageID=3" title="page 3" class="page"><span>3</span></a><a href="https://www.wan55.co.jp/column/?pageID=4" title="page 4" class="page"><span>4</span></a><a href="https://www.wan55.co.jp/column/?pageID=5" title="page 5" class="page"><span>5</span></a>… <a href="https://www.wan55.co.jp/column/?pageID=9" title="page 9" class="page"><span>9</span></a><a href="https://www.wan55.co.jp/column/?pageID=2" title="next page" class="page"><span>&gt;</span></a>
  		</div>
  		<div class="archive-wrapper">
  			<ul>
            <?php
while(have_posts()):
the_post();
?>
	  			<li>
	  				<a href="http://suam102.com/exhibition/641" title="佐賀の美術教師たち－地方画壇の成立と美術教育者">
											<figure><img src="http://suam102.com/wp-content/uploads/2016/05/20160509111755-200x160.jpeg"></figure>
											<span class="date">2016.05.15</span>
											<span class="title">【終了：主催】佐賀の美術教師たち－地方画壇の成立と美術教育者</span>
											<span class="descript">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span>
											<span class="botton">続きを読む</span>
					</a>
	  			</li>
	  			<li>
	  				<a href="http://suam102.com/exhibition/641" title="佐賀の美術教師たち－地方画壇の成立と美術教育者">
											<figure><img src="http://suam102.com/wp-content/uploads/2016/05/20160509111755-200x160.jpeg"></figure>
											<span class="date">2016.05.15</span>
											<span class="title">【終了：主催】佐賀の美術教師たち－地方画壇の成立と美術教育者</span>
											<span class="descript">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span>
											<span class="botton">続きを読む</span>
					</a>
	  			</li>	  			
  			</ul>
  		</div>  		
  </div>
</div>
<?php
endwhile;
endif;
?>
<?php get_footer(); ?>