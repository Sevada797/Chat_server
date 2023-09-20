<?php

$msg = $_GET["msg"];
if (strlen($msg) > 400) {die("<script>alert('The max limit of message should be 400 letters.'); window.location = 'index.php' </script>");}
if ($msg == NULL) {die("<script>alert('Please fill up message-box.'); window.location = 'index.php'</script>");}
header('location: index.php');
echo $msg;
echo urldecode($msg);
$mfile = fopen("chat.txt", "a") or die("Sorry somthing is not working"); 
fwrite($mfile, ($_SERVER["REMOTE_ADDR"] . ":" . $_COOKIE["usr"] . ": " . $msg . "\n"));
fclose($mfile);


?>
