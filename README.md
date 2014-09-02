
-------- A FUNCTION TO OBFUSCATE EMAIL AND AVOID SPAM ---------
Written by Daian Gan based on CodeIgniter safe_mailto() function
http://ganmedia.com 

USAGE:
You just have to call the function and pass the email as the parameter.
Example: 
echo safe_mail('me@mywebsite.com');

Or insert it into your HTML code like this for example:
<p><?= safe_mail('me@mywebsite.com') ?></p>

The function return the email in plain text obfuscated with a javascript algorithm.