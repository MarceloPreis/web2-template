<?php get_header() ?>

<div class="main">
	<span class="title">ARTIGOS</span>

	<div class="post">
		<section class="articles">
		<?php 
		$my_posts = get_posts(); 
		foreach ($my_posts as $post) { 
			echo 
			'<article>
				<div class="article-wrapper">
					<figure>
						<img src="https://picsum.photos/id/1011/800/450" alt="" />
					</figure>
					<div class="article-body">
						<h2> ' . $post->post_title . ' </h2>
						<p> ' . $post->post_content . ' </p>
					</div>
				</div>
			</article>';
		} 
		?>
		</section>
	</div>
</div>

<?php get_footer() ?>
