		</section>
		<footer>
			<p>Made By Januzs Woyciechowsky</p>
		</footer>
		<?php if(isset($this->js)){
			foreach ($this->js as $js) {
				echo "<script type='text/javascript' src='".URL."public/js/".$js.".js'></script>";
			}
		}?>
	</body>
<html>