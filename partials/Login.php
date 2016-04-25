<?php

$form_token = hash('whirlpool', uniqid('auth', true));
$_SESSION['form_token'] = $form_token;

?>
<h2>Log in</h2>
<form action="../validations/Login.php" method="post">
		<p>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" maxlength="20" />
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" id="password" name="password"/>
		</p>
		<p>
			<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
			<input type="submit" value="&rarr; Log in" />
		</p>
</form>