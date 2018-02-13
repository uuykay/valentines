<!DOCTYPE html>
<html>

<head>
	<title>Hey Becky!</title>
	<script src="./polymorph.min.js"></script>
</head>

<body>
	<?php
	$base_images = file_get_contents('base_images.svg');
	echo '<center><div id="rose" style="display:none;">'.$base_images.'</div></center>';
	?>
	<span style="font-family:Apple Chancery; font-size:50px; font-style:italic;">Happy Valentines</span>
	<svg id="container" viewBox="0 0 1000 1000">
		<path id="target" fill="#FF1493"/>
	</svg>

	<script src="dist/bundle.js"></script>
</body>

</html>