<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
	</style>

	<?php
		if (!isset($output)) {
			$link = Request::root().'/init/';
		}
		else {
			$link = Request::root().'/'.$output.'/';
		}
	?>

</head>
<body>
	<div class="output">
		<input id="output-screen" value="<?php if (isset($output)) {echo $output;} ?>" readonly>
		<input id="operator-screen" value="<?php if (isset($operator)) {echo $operator;}?>" readonly>
	</div>
	<div class="input-number">
		<form action="<?php echo $link . 'calc/0'; ?>">
			<input type="submit" value="0">
		</form>
		<form action="<?php echo $link . 'calc/1'; ?>">
			<input type="submit" value="1">
		</form>
		<form action="<?php echo $link . 'calc/2'; ?>">
			<input type="submit" value="2">
		</form>
		<form action="<?php echo $link . 'calc/3'; ?>">
			<input type="submit" value="3">
		</form>
		<form action="<?php echo $link . 'calc/4'; ?>">
			<input type="submit" value="4">
		</form>
		<form action="<?php echo $link . 'calc/5'; ?>">
			<input type="submit" value="5">
		</form>
		<form action="<?php echo $link . 'calc/6'; ?>">
			<input type="submit" value="6">
		</form>
		<form action="<?php echo $link . 'calc/7'; ?>">
			<input type="submit" value="7">
		</form>
		<form action="<?php echo $link . 'calc/8'; ?>">
			<input type="submit" value="8">
		</form>
		<form action="<?php echo $link . 'calc/9'; ?>">
			<input type="submit" value="9">
		</form>
	</div>
	<div class="input-operator">
		<form action="<?php echo $link.'op/*'; ?>">
			<input type="submit" value="*">
		</form>
		<form action="<?php echo $link.'op/:'; ?>">
			<input type="submit" value=":">
		</form>
		<form action="<?php echo $link.'op/+'; ?>">
			<input type="submit" value="+">
		</form>
		<form action="<?php echo $link.'op/-'; ?>">
			<input type="submit" value="-">
		</form>
	</div>
	<div class="input-clear">
		<form action="<?php echo Request::root(); ?>">
			<input type="submit" value="c">
		</form>
	</div>
</body>
</html>
