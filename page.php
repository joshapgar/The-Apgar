<?php get_header(); ?>
	<div class="container">
		<div id="inner-content">
			<div class="row">
				<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<header class="article-header">
								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
							</header>

							<section class="entry-content" itemprop="articleBody">
								<?php
									the_content();
								?>
							</section>

							<footer class="article-footer">
							</footer>
						</article>
					<?php endwhile; endif; ?>
					</div>
				</main>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
