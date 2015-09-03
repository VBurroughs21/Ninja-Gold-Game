<?php session_start(); ?>


<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Great Number Game</title>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div>
			<p>Your Gold:</p><textarea></textarea>

		</div>
		<div class="places">
			<h2>Farm</h2>
			<p>(earns 10-20 gold)</p>
			<form method="post" action="process.php">
				<input type="hidden" name="action_farm" value="Find Gold!">
			</form>
		</div>
		<div class="places">
			<h2>Cave</h2>
			<p>(earns 10-20 gold)</p>
			<form method="post" action="process.php">
				<input type="hidden" name="action_cave" value="Find Gold!">
			</form>
		</div>
		<div class="places">
			<h2>House</h2>
			<p>(earns 10-20 gold)</p>
			<form method="post" action="process.php">
				<input type="hidden" name="action_house" value="Find Gold!">
			</form>
		</div>
		<div class="places">
			<h2>Casino</h2>
			<p>(earns 10-20 gold)</p>
			<form method="post" action="process.php">
				<input type="hidden" name="action_casino" value="Find Gold!">
			</form>
		</div>
		<div id="activities">
			<p>Activities:</p>
			<textarea></textarea>
		</div>
	</body>
</html>


?>