<!DOCTYPE html>
<html>
<head>
	<title><?=(isset($this->title)) ? $this->title : 'Shortly'; ?></title>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	<?php if(isset($this->css)){
		foreach ($this->css as $css) {
			echo "<link rel='stylesheet' type='text/css' href='".URL."public/css/".$css.".css'>";
		}
	}?>
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		
	</header><!--
	--><section id="content">