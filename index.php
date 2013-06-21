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
		<div class="form">
		<form action="rex.php" method="post">
			<div id="what-text">
				What should Treyosaurus say?
			</div>
			<div id="field">
				<input type="text" name="rawr">
			</div>
			<div id="button">
				<input type="submit">
				<p style="font-size: .7em; font-style: italic;">Please limit input to 115 characters.</p>
			</div>
		</form>
		</div>
		<div class="trey">
			<img class="pic" src="images/pic.png" />
		</div>
	</div>
	</body>
</html>