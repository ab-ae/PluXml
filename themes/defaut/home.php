<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div class="content">

		<div class="width-sidebar">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header role="banner">
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				</header>

				<section>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer role="contentinfo">
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>

			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			<div class="rss">
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</div>

		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
