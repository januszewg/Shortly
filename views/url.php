<section class="container">
	<article>
		<h3>List of Links</h3>
		<article id="list">
		<?php foreach ($this->geturl as $data) {	?>
			<div><a href="<?php echo $data['url'];?>"><?php echo $data['url_new'];?></a></div>
		<?php }?>
		</article>
	</article>
</section>
