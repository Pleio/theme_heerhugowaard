<?php echo elgg_view('input/text', array('name' => 'username', 'value' => elgg_echo('username')));?>
<?php echo elgg_view('input/text', array('value' => elgg_echo('password')));?>
<?php echo elgg_view('input/password', array('name' => 'password'));?><br />
<span id="persistent_login">
	<input type="checkbox" value="true" name="persistent"><?php echo elgg_echo('user:persistent');?>
</span>
<?php echo elgg_view('input/submit', array('value' => elgg_echo('login')));?>

<script type="text/javascript">
$(document).ready(function(){
	$(".loggedin-box input[type='text'],.loggedin-box input[type='password']").focus(function(){
		$val = $(this).val();
		if($val == "Gebruikersnaam"){
			$(this).val("");
		}
		if($val == "Wachtwoord"){
			$(this).hide().next().show().focus();
		}
		
	}).blur(function(){
		if($(this).val() == ""){
			if($(this).attr("type") == "password"){
				$(this).hide().prev().show();
			} else {
				$(this).val($(this).attr("title"));
			}
			
		}
	});
});
</script>