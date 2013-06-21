<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Treyosaurs Says...</title>
    <link rel="stylesheet" href="style.css">
  </head>
	<body>
		<?php include_once ("analytics.php") ?>
	<div class="containment">
		<div class="bubble">
		<div class="bubble-wrap">
			<div id="saying-text"> <?php echo $_POST["rawr"]; ?>!</div>
			<div class="rawr">RAWR!</div>
		</div>
		</div>
		<div class="trey-rex">
			<img class="pic" src="/images/pic.png" />
		</div>
	</div>
	</body>
</html>