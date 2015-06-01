<style type="text/css">
	section.container article#url{
		background: white;
		width: 30%;
		margin: 0 auto;
		padding: 1em;
		position: relative;
		top: 25%;
		text-align: center;
	}
</style>
<section class="container">
	<article id="url">
		<h3>Your short url</h3>
		<?php foreach ($this->link as $data) {?>
		<a href="<?php echo $data['url_new'];?>"> <?php echo $data['url_new'];?></a>
		<?php }?>
	</article>
</section>