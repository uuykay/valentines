<!DOCTYPE html>
<html>

<head>
	<title>Hey Becky!</title>
	<script src="./polymorph.min.js"></script>
</head>

<body>
	<?php
	$base_images = file_get_contents('base_images.svg');
	echo '<center><div id="rose">'.$base_images.'</div></center>';
	?>

	<svg id="container" width="100%" viewBox="0 0 1500 1500">
		<path id="target" fill="#FF1493"/>
	</svg>

	<script src="dist/bundle.js"></script>
</body>

</html>