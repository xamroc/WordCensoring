<?php

$find = array('bitch','fuck','shit');
$replace = array('b***h','f**k','s**t');
	
if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
	$user_input = $_POST['user_input'];
	$user_input_censored = str_replace($find, $replace, $user_input);
	
	echo $user_input_censored;
}
	
?>

<hr>

<form action="index.php" method="POST">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br>
	<input type="submit" value="Submit">
</form>