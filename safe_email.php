<?php

##### A FUNCTION TO OBFUSCATE EMAIL AND AVOID SPAM #####
##### Written by Daian Gan based on CodeIgniter safe_mailto() function #####
##### http://ganmedia.com #####

function safe_email($email) {

	for ($i = 0; $i < strlen($email); $i++)
	{
		$x[] = "|".ord(substr($email, $i, 1));
	}

	$x = array_reverse($x);
	ob_start();
	?>
	<script type="text/javascript">
	//<![CDATA[
	var l=new Array();
	<?php
	$i = 0;
	foreach ($x as $val){ ?>l[<?php echo $i++; ?>]='<?php echo $val; ?>';<?php } ?>

	for (var i = l.length-1; i >= 0; i=i-1){
	if (l[i].substring(0, 1) == '|') document.write("&#"+unescape(l[i].substring(1))+";");
	else document.write(unescape(l[i]));}
	//]]>
	</script>
	<?php

		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}

##### END OF THE FUNCTION #####

?>