<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo IMG; ?>ico.ico"/>
	<title><?php echo isset($title) ? "Aprenda Mais - ".$title : "Aprenda Mais"; ?></title>
	<?php 
		if( isset($links) ) foreach ($links as $link) {
			echo '<link rel="stylesheet" type="text/css" href="'.CSS.$link.'">';
		}
	?>
</head>
<body <?php if(isset($class)) echo "class=".$class; ?>>
    <section>
    	<div class="container-fluid">
	    	<div class="row">
